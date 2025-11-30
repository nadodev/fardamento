#!/bin/bash

# Script de deploy para Laravel na VPS Hostinger

echo "🚀 Iniciando deploy do Fardamento..."

# Atualizar dependências do Composer
echo "📦 Instalando dependências do Composer..."
composer install --no-dev --optimize-autoloader --no-interaction

# Instalar dependências NPM e build
echo "📦 Instalando dependências NPM e fazendo build..."
npm install
npm run build

# Limpar e otimizar cache
echo "🧹 Limpando caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Otimizar aplicação
echo "⚡ Otimizando aplicação..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Executar migrations
echo "🗄️ Executando migrations..."
php artisan migrate --force

# Executar seeders (opcional - descomente se necessário)
# php artisan db:seed --force

# Configurar permissões
echo "🔐 Configurando permissões..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

echo "✅ Deploy concluído com sucesso!"

