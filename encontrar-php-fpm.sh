#!/bin/bash

# Script para encontrar o socket/porta do PHP-FPM 8.3 e configurar o Nginx

echo "=== ENCONTRANDO CONFIGURAÇÃO DO PHP-FPM 8.3 ==="
echo ""

# 1. Verificar arquivo de configuração do PHP-FPM 8.3
# Tentar diferentes nomes de arquivo
PHP_FPM_CONF=""
for conf_file in "/etc/php/8.3/fpm/pool.d/www.conf" "/etc/php/8.3/fpm/pool.d/default.conf" "/etc/php/8.3/fpm/pool.d/global.conf"; do
    if [ -f "$conf_file" ]; then
        PHP_FPM_CONF="$conf_file"
        break
    fi
done

if [ -z "$PHP_FPM_CONF" ]; then
    echo "1. Procurando arquivo de configuração..."
    ls -la /etc/php/8.3/fpm/pool.d/
    echo ""
    echo "   Tentando encontrar configuração do listen em todos os arquivos..."
    grep -h "^listen" /etc/php/8.3/fpm/pool.d/*.conf 2>/dev/null | head -1
    PHP_FPM_CONF="/etc/php/8.3/fpm/pool.d/default.conf"
fi

if [ -f "$PHP_FPM_CONF" ]; then
    echo "1. Arquivo de configuração encontrado: $PHP_FPM_CONF"
    echo ""
    echo "   Configuração atual do listen:"
    grep "^listen" "$PHP_FPM_CONF" | head -1
    
    LISTEN_CONFIG=$(grep "^listen" "$PHP_FPM_CONF" | head -1 | awk '{print $3}' | tr -d ';')
    
    if [[ "$LISTEN_CONFIG" == *"unix:"* ]] || [[ "$LISTEN_CONFIG" == *"/"* ]]; then
        echo ""
        echo "   ✓ PHP-FPM 8.3 está configurado para usar socket Unix: $LISTEN_CONFIG"
        PHP_SOCKET="$LISTEN_CONFIG"
    elif [[ "$LISTEN_CONFIG" == *":"* ]]; then
        echo ""
        echo "   ✓ PHP-FPM 8.3 está configurado para usar TCP: $LISTEN_CONFIG"
        PHP_SOCKET="$LISTEN_CONFIG"
    else
        echo ""
        echo "   ⚠ Configuração não reconhecida: $LISTEN_CONFIG"
        PHP_SOCKET="127.0.0.1:9000"
    fi
else
    echo "   ✗ Arquivo de configuração não encontrado!"
    echo "   Verificando todos os arquivos em /etc/php/8.3/fpm/pool.d/:"
    ls -la /etc/php/8.3/fpm/pool.d/
    exit 1
fi

# 2. Verificar se o socket/porta existe
echo ""
echo "2. Verificando se o socket/porta está acessível..."
if [[ "$PHP_SOCKET" == *"unix:"* ]]; then
    SOCKET_PATH=$(echo "$PHP_SOCKET" | sed 's/unix://')
    if [ -S "$SOCKET_PATH" ]; then
        echo "   ✓ Socket Unix encontrado: $SOCKET_PATH"
        ls -l "$SOCKET_PATH"
    else
        echo "   ✗ Socket Unix não encontrado: $SOCKET_PATH"
        echo "   Procurando sockets PHP-FPM 8.3..."
        find /var/run/php /run/php /var/run/php-fpm -name "*8.3*" -o -name "*php*" 2>/dev/null | head -10
    fi
elif [[ "$PHP_SOCKET" == *":"* ]]; then
    PORT=$(echo "$PHP_SOCKET" | cut -d: -f2)
    if netstat -tlnp 2>/dev/null | grep -q ":$PORT " || ss -tlnp 2>/dev/null | grep -q ":$PORT "; then
        echo "   ✓ Porta $PORT está escutando"
        netstat -tlnp 2>/dev/null | grep ":$PORT " || ss -tlnp 2>/dev/null | grep ":$PORT "
    else
        echo "   ✗ Porta $PORT não está escutando"
    fi
fi

# 3. Atualizar configuração do Nginx
echo ""
echo "3. Atualizando configuração do Nginx..."
NGINX_CONFIG="/etc/nginx/conf.d/fardamento.conf"

if [ -f "$NGINX_CONFIG" ]; then
    # Fazer backup
    cp "$NGINX_CONFIG" "$NGINX_CONFIG.backup"
    
    # Atualizar fastcgi_pass
    if [[ "$PHP_SOCKET" == *"unix:"* ]]; then
        sed -i "s|fastcgi_pass .*|fastcgi_pass $PHP_SOCKET;|" "$NGINX_CONFIG"
    else
        sed -i "s|fastcgi_pass .*|fastcgi_pass $PHP_SOCKET;|" "$NGINX_CONFIG"
    fi
    
    echo "   ✓ Configuração atualizada"
    echo ""
    echo "   Nova configuração do fastcgi_pass:"
    grep "fastcgi_pass" "$NGINX_CONFIG"
    
    # Verificar configuração
    echo ""
    echo "4. Verificando configuração do Nginx..."
    if nginx -t; then
        echo "   ✓ Configuração válida!"
        echo ""
        echo "   Recarregando Nginx..."
        systemctl reload nginx
        echo "   ✓ Nginx recarregado!"
    else
        echo "   ✗ ERRO na configuração!"
        echo "   Restaurando backup..."
        mv "$NGINX_CONFIG.backup" "$NGINX_CONFIG"
        exit 1
    fi
else
    echo "   ✗ Arquivo de configuração do Nginx não encontrado: $NGINX_CONFIG"
    exit 1
fi

echo ""
echo "=== CONFIGURAÇÃO CONCLUÍDA ==="
echo ""
echo "PHP-FPM configurado para usar: $PHP_SOCKET"
echo ""
echo "Teste novamente: http://fardamento.leonardogeja.com.br"

