#!/bin/bash
set -e

echo "=== Iniciando configuração do Laravel ==="

# Garantir que o diretório public existe
echo "Verificando diretório public..."
if [ ! -d "/var/www/public" ]; then
    echo "Diretório public não encontrado! Criando..."
    mkdir -p /var/www/public
    if [ -f "/var/www/public/index.php" ]; then
        echo "index.php encontrado"
    else
        echo "AVISO: index.php não encontrado em /var/www/public"
        ls -la /var/www/ | head -20
    fi
fi

# Instalar dependências do sistema
echo "Instalando dependências do sistema..."
apt-get update -qq
apt-get install -y -qq git curl libpng-dev libonig-dev libxml2-dev zip unzip > /dev/null 2>&1

# Instalar extensões PHP
echo "Instalando extensões PHP..."
docker-php-ext-install -j$(nproc) pdo_mysql mbstring exif pcntl bcmath gd > /dev/null 2>&1

# Instalar Node.js
echo "Instalando Node.js..."
if ! command -v node &> /dev/null; then
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash - > /dev/null 2>&1
    apt-get install -y -qq nodejs > /dev/null 2>&1
fi

# Instalar Composer
echo "Instalando Composer..."
if ! command -v composer &> /dev/null; then
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    chmod +x /usr/local/bin/composer
fi

# Aguardar banco de dados
echo "Aguardando banco de dados..."
until php -r "try { new PDO('mysql:host=db;dbname=fardamento', 'fardamento', 'fardamento123'); exit(0); } catch (PDOException \$e) { exit(1); }" 2>/dev/null; do
  echo "Aguardando banco de dados..."
  sleep 2
done
echo "Banco de dados disponível!"

# Instalar dependências do Composer
if [ ! -d "vendor" ]; then
    echo "Instalando dependências do Composer..."
    composer install --no-dev --optimize-autoloader --no-interaction
fi

# Instalar dependências do NPM
if [ ! -d "node_modules" ]; then
    echo "Instalando dependências do NPM..."
    npm install --silent
fi

# Build dos assets
if [ ! -f "public/build/manifest.json" ]; then
    echo "Compilando assets..."
    npm run build
fi

# Configurar .env
if [ ! -f ".env" ]; then
    echo "Criando arquivo .env..."
    cp .env.example .env
    php artisan key:generate --force
fi

# Executar migrations
echo "Executando migrations..."
php artisan migrate --force || true

# Executar seeders
echo "Executando seeders..."
php artisan db:seed --force || true

# Criar link simbólico do storage
php artisan storage:link || true

# Limpar e recriar caches
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true
php artisan route:clear || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Configurar permissões
echo "Configurando permissões..."
mkdir -p /var/www/public /var/www/storage /var/www/bootstrap/cache
chown -R www-data:www-data /var/www || true
chmod -R 777 /var/www/storage || true
chmod -R 777 /var/www/bootstrap/cache || true
chmod -R 755 /var/www/public || true
find /var/www/public -type f -exec chmod 644 {} \; || true
find /var/www/public -type d -exec chmod 755 {} \; || true

echo "=== Configuração concluída! ==="

# Executar PHP-FPM
exec php-fpm

