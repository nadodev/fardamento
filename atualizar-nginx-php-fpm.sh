#!/bin/bash

# Script para atualizar Nginx com a porta correta do PHP-FPM 8.3

set -e

echo "=== ATUALIZANDO NGINX PARA PHP-FPM 8.3 (PORTA 18000) ==="
echo ""

NGINX_CONFIG="/etc/nginx/conf.d/fardamento.conf"

if [ ! -f "$NGINX_CONFIG" ]; then
    echo "✗ Arquivo de configuração não encontrado: $NGINX_CONFIG"
    exit 1
fi

# Fazer backup
cp "$NGINX_CONFIG" "$NGINX_CONFIG.backup"
echo "✓ Backup criado: $NGINX_CONFIG.backup"
echo ""

# Atualizar fastcgi_pass para usar porta 18000
sed -i 's|fastcgi_pass .*|fastcgi_pass 127.0.0.1:18000;|' "$NGINX_CONFIG"

echo "✓ Configuração atualizada"
echo ""
echo "Nova configuração do fastcgi_pass:"
grep "fastcgi_pass" "$NGINX_CONFIG"
echo ""

# Verificar configuração
echo "Verificando configuração do Nginx..."
if nginx -t; then
    echo "✓ Configuração válida!"
    echo ""
    echo "Recarregando Nginx..."
    systemctl reload nginx
    echo "✓ Nginx recarregado!"
    echo ""
    echo "=== CONFIGURAÇÃO CONCLUÍDA ==="
    echo ""
    echo "PHP-FPM configurado para usar: 127.0.0.1:18000"
    echo ""
    echo "Teste agora: http://fardamento.leonardogeja.com.br"
else
    echo "✗ ERRO na configuração!"
    echo "Restaurando backup..."
    mv "$NGINX_CONFIG.backup" "$NGINX_CONFIG"
    exit 1
fi




