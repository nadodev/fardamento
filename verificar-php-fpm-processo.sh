#!/bin/bash  verificar-php-fpm-processo.sh

# Verificar qual PHP-FPM está rodando na porta 18000

echo "=== VERIFICANDO PROCESSO PHP-FPM NA PORTA 18000 ==="
echo ""

# 1. Verificar qual processo está na porta 18000
echo "1. Processo na porta 18000:"
PID=$(sudo lsof -ti:18000 2>/dev/null || sudo fuser 18000/tcp 2>/dev/null | awk '{print $1}' || netstat -tlnp 2>/dev/null | grep ":18000" | awk '{print $7}' | cut -d'/' -f1)
if [ -n "$PID" ]; then
    echo "   PID: $PID"
    echo ""
    echo "   Informações do processo:"
    ps -p "$PID" -o pid,ppid,user,cmd
    echo ""
    echo "   Comando completo:"
    ps -p "$PID" -o cmd --no-headers
    echo ""
    echo "   Verificando se é PHP-FPM 8.3:"
    ps -p "$PID" -o cmd --no-headers | grep -i "8.3" && echo "   ✓ É PHP-FPM 8.3" || echo "   ⚠ Pode não ser PHP-FPM 8.3"
else
    echo "   ✗ Não foi possível identificar o PID"
fi
echo ""

# 2. Verificar todos os processos PHP-FPM
echo "2. Todos os processos PHP-FPM:"
ps aux | grep "[p]hp-fpm" | while read line; do
    echo "   $line"
done
echo ""

# 3. Verificar qual PHP-FPM está realmente rodando
echo "3. Verificando status do PHP-FPM 8.3:"
systemctl status php8.3-fpm --no-pager | head -15
echo ""

# 4. Testar conexão direta com PHP-FPM usando socket
echo "4. Testando processamento PHP via FastCGI..."
# Criar um script de teste
TEST_SCRIPT="/home/user/htdocs/srv1163656.hstgr.cloud/public/test-fcgi.php"
echo "<?php echo 'PHP funcionando via FastCGI!'; ?>" > "$TEST_SCRIPT"
chmod 644 "$TEST_SCRIPT"
chown www-data:www-data "$TEST_SCRIPT"

# Tentar acessar via curl
echo "   Testando via HTTP:"
curl -s "http://127.0.0.1/test-fcgi.php" -H "Host: fardamento.leonardogeja.com.br" 2>&1 | head -5
echo ""

# 5. Verificar se há erros no log do PHP-FPM após a requisição
echo "5. Logs do PHP-FPM após requisição:"
sleep 1
sudo tail -5 /var/log/php8.3-fpm.log
echo ""

# 6. Verificar se o Nginx está realmente processando
echo "6. Verificando se o Nginx está processando a requisição:"
sudo tail -3 /var/log/nginx/error.log | grep -i "fastcgi\|502" || echo "   Nenhum erro recente relacionado"
echo ""

# Limpar arquivo de teste
rm -f "$TEST_SCRIPT"

echo "=== VERIFICAÇÃO CONCLUÍDA ==="

