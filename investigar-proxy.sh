#!/bin/bash

# Script para investigar por que LiteSpeed ainda responde mesmo com Nginx na porta 80

echo "=== INVESTIGANDO PROXY/REVERSE PROXY ==="
echo ""

# 1. Verificar processos LiteSpeed
echo "1. Verificando processos LiteSpeed..."
ps aux | grep -i litespeed | grep -v grep
ps aux | grep -i lshttpd | grep -v grep
echo ""

# 2. Verificar serviços LiteSpeed
echo "2. Verificando serviços LiteSpeed..."
systemctl list-units | grep -i lite
systemctl list-units | grep -i lshttp
echo ""

# 3. Verificar portas em uso
echo "3. Verificando todas as portas em uso..."
netstat -tlnp 2>/dev/null | grep -E ":(80|443|7080|8088)" || ss -tlnp 2>/dev/null | grep -E ":(80|443|7080|8088)"
echo ""

# 4. Verificar se há proxy reverso configurado
echo "4. Verificando configurações de proxy..."
if [ -d "/usr/local/lsws" ]; then
    echo "   ⚠ Diretório LiteSpeed encontrado: /usr/local/lsws"
    ls -la /usr/local/lsws/conf/ 2>/dev/null | head -10
fi

if [ -d "/opt/lsws" ]; then
    echo "   ⚠ Diretório LiteSpeed encontrado: /opt/lsws"
    ls -la /opt/lsws/conf/ 2>/dev/null | head -10
fi
echo ""

# 5. Verificar configuração do Nginx - ver se há proxy_pass
echo "5. Verificando configuração do Nginx..."
if [ -f "/etc/nginx/nginx.conf" ]; then
    echo "   Verificando nginx.conf principal..."
    grep -i "proxy_pass\|litespeed" /etc/nginx/nginx.conf | head -5
fi

if [ -f "/etc/nginx/conf.d/fardamento.conf" ]; then
    echo "   Verificando fardamento.conf..."
    cat /etc/nginx/conf.d/fardamento.conf
fi
echo ""

# 6. Testar conexão local vs externa
echo "6. Testando conexão local vs externa..."
echo "   Teste local (127.0.0.1):"
curl -s -I http://127.0.0.1 2>/dev/null | head -3
echo ""
echo "   Teste com Host header:"
curl -s -I -H "Host: fardamento.leonardogeja.com.br" http://127.0.0.1 2>/dev/null | head -3
echo ""
echo "   Teste externo:"
curl -s -I http://fardamento.leonardogeja.com.br 2>/dev/null | head -3
echo ""

# 7. Verificar se há Cloudflare ou outro CDN
echo "7. Verificando headers HTTP completos..."
curl -s -I http://fardamento.leonardogeja.com.br 2>/dev/null
echo ""

# 8. Verificar IPs
echo "8. Verificando IPs..."
echo "   IP da VPS:"
hostname -I
echo ""
echo "   IP do domínio:"
dig +short fardamento.leonardogeja.com.br
echo ""

echo "=== INVESTIGAÇÃO CONCLUÍDA ==="
echo ""
echo "Se o LiteSpeed ainda responder, pode ser:"
echo "  1. Proxy reverso da Hostinger na frente"
echo "  2. Cloudflare ou outro CDN"
echo "  3. LiteSpeed rodando em outra porta/proxy"
echo ""
echo "Solução: Configure o LiteSpeed para servir o Laravel OU"
echo "         Configure o proxy reverso da Hostinger para usar Nginx"

