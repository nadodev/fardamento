#!/bin/bash
set -e

echo "Aguardando banco de dados..."
until php -r "try { new PDO('mysql:host=db;dbname=fardamento', 'fardamento', 'fardamento123'); exit(0); } catch (PDOException \$e) { exit(1); }" 2>/dev/null; do
  sleep 1
done

echo "Banco de dados disponível!"

# Instalar dependências do Composer se necessário
if [ ! -d "vendor" ]; then
    echo "Instalando dependências do Composer..."
    composer install --no-dev --optimize-autoloader --no-interaction
fi

# Instalar dependências do NPM se necessário
if [ ! -d "node_modules" ]; then
    echo "Instalando dependências do NPM..."
    npm install
fi

# Build dos assets se necessário
if [ ! -f "public/build/manifest.json" ]; then
    echo "Compilando assets..."
    npm run build
fi

# Configurar .env se não existir
if [ ! -f ".env" ]; then
    echo "Criando arquivo .env..."
    cp .env.example .env
    php artisan key:generate --force
fi

# Configurar variáveis de ambiente do banco
php artisan config:cache || true

# Executar migrations
echo "Executando migrations..."
php artisan migrate --force || true

# Executar seeders
echo "Executando seeders..."
php artisan db:seed --force || true

# Criar link simbólico do storage
php artisan storage:link || true

# Limpar caches
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true
php artisan route:clear || true

# Recriar caches
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Configurar permissões
chown -R www-data:www-data /var/www
chmod -R 755 /var/www/storage
chmod -R 755 /var/www/bootstrap/cache
chmod -R 755 /var/www/public || true

echo "Inicialização concluída!"

exec "$@"

