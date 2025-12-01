# Configuração do Nginx do Sistema

## Passos para configurar o Nginx do sistema

1. **Verificar estrutura do Nginx:**
```bash
# Verificar se existe sites-available
ls -la /etc/nginx/sites-available/

# OU verificar se existe conf.d
ls -la /etc/nginx/conf.d/
```

2. **Copiar o arquivo de configuração:**

**Se usar sites-available/sites-enabled:**
```bash
sudo cp nginx-fardamento.conf /etc/nginx/sites-available/fardamento.leonardogeja.com.br
sudo ln -s /etc/nginx/sites-available/fardamento.leonardogeja.com.br /etc/nginx/sites-enabled/
```

**Se usar conf.d:**
```bash
sudo cp nginx-fardamento.conf /etc/nginx/conf.d/fardamento.leonardogeja.com.br.conf
```

3. **Verificar se o PHP-FPM está rodando:**
```bash
sudo systemctl status php8.3-fpm
# Se não estiver instalado, instale:
sudo apt-get update
sudo apt-get install php8.3-fpm php8.3-mysql php8.3-mbstring php8.3-xml php8.3-curl php8.3-zip php8.3-gd
```

4. **Verificar a configuração do Nginx:**
```bash
sudo nginx -t
```

5. **Recarregar o Nginx:**
```bash
sudo systemctl reload nginx
```

6. **Verificar se o diretório public existe e tem permissões corretas:**
```bash
ls -la /home/user/htdocs/srv1163656.hstgr.cloud/public
sudo chown -R www-data:www-data /home/user/htdocs/srv1163656.hstgr.cloud
sudo chmod -R 755 /home/user/htdocs/srv1163656.hstgr.cloud
sudo chmod -R 775 /home/user/htdocs/srv1163656.hstgr.cloud/storage
sudo chmod -R 775 /home/user/htdocs/srv1163656.hstgr.cloud/bootstrap/cache
```

## Alternativa: Usar Docker com Proxy Reverso

Se quiser usar o Docker e manter o Nginx do sistema:

1. **Parar o Nginx do sistema na porta 80 (temporariamente):**
```bash
sudo systemctl stop nginx
```

2. **Iniciar o Docker:**
```bash
cd /home/user/htdocs/srv1163656.hstgr.cloud
docker-compose up -d
```

3. **Usar a configuração de proxy reverso:**
```bash
sudo cp nginx-fardamento-proxy.conf /etc/nginx/sites-available/fardamento.leonardogeja.com.br
sudo ln -s /etc/nginx/sites-available/fardamento.leonardogeja.com.br /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl start nginx
```

**OU mudar o Docker para usar outra porta (8080) e fazer proxy reverso:**
   - Mudar o docker-compose.yml para usar porta 8080 no nginx
   - Configurar o Nginx do sistema para fazer proxy para localhost:8080

## Verificar se está funcionando

```bash
curl -I http://fardamento.leonardogeja.com.br
```

