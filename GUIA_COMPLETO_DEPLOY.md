# Guia Completo - Configuração do Domínio fardamento.leonardogeja.com.br

## Passo 1: Verificar Estrutura do Projeto

```bash
# Conectar na VPS via SSH
ssh root@srv1163656

# Navegar para o diretório do projeto
cd /home/user/htdocs/srv1163656.hstgr.cloud

# Verificar se os arquivos estão lá
ls -la
ls -la public/
```

**O que verificar:**
- ✅ Diretório `public/` existe
- ✅ Arquivo `public/index.php` existe
- ✅ Arquivo `.env` existe (ou `.env.example`)

---

## Passo 2: Configurar o Arquivo .env

```bash
# Se não existir .env, criar a partir do .env.example
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Editar o arquivo .env
nano .env
```

**Configurações importantes no .env:**

```env
APP_NAME="Fardamento"
APP_ENV=production
APP_KEY=base64:SUA_CHAVE_AQUI
APP_DEBUG=false
APP_URL=http://fardamento.leonardogeja.com.br

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fardamento
DB_USERNAME=fardamento
DB_PASSWORD=fardamento123
```

**Salvar e sair:** `Ctrl+X`, depois `Y`, depois `Enter`

**Gerar APP_KEY:**
```bash
php artisan key:generate --force
```

---

## Passo 3: Configurar Banco de Dados

```bash
# Verificar se o MySQL está rodando
sudo systemctl status mysql

# Conectar no MySQL
mysql -u root -p

# Criar banco de dados e usuário (se não existir)
CREATE DATABASE IF NOT EXISTS fardamento;
CREATE USER IF NOT EXISTS 'fardamento'@'localhost' IDENTIFIED BY 'fardamento123';
GRANT ALL PRIVILEGES ON fardamento.* TO 'fardamento'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

**Executar migrations:**
```bash
cd /home/user/htdocs/srv1163656.hstgr.cloud
php artisan migrate --force
php artisan db:seed --force
```

---

## Passo 4: Configurar Permissões

```bash
# Descobrir qual usuário o Nginx usa
ps aux | grep '[n]ginx: master' | awk '{print $1}'

# Geralmente é 'www-data' ou 'nginx'
# Configurar permissões
sudo chown -R www-data:www-data /home/user/htdocs/srv1163656.hstgr.cloud
# OU se for nginx:
# sudo chown -R nginx:nginx /home/user/htdocs/srv1163656.hstgr.cloud

# Configurar permissões dos diretórios
sudo chmod -R 755 /home/user/htdocs/srv1163656.hstgr.cloud
sudo chmod -R 775 /home/user/htdocs/srv1163656.hstgr.cloud/storage
sudo chmod -R 775 /home/user/htdocs/srv1163656.hstgr.cloud/bootstrap/cache
```

---

## Passo 5: Configurar PHP-FPM 8.3

```bash
# Verificar se PHP-FPM 8.3 está rodando
sudo systemctl status php8.3-fpm

# Se não estiver rodando, iniciar
sudo systemctl start php8.3-fpm
sudo systemctl enable php8.3-fpm

# Verificar em qual porta/socket está escutando
cat /etc/php/8.3/fpm/pool.d/default.conf | grep "^listen"

# Deve mostrar algo como: listen = 127.0.0.1:18000
```

---

## Passo 6: Configurar Nginx

```bash
# Criar arquivo de configuração do Nginx
sudo nano /etc/nginx/conf.d/fardamento.conf
```

**Cole o seguinte conteúdo (ajuste a porta do PHP-FPM se necessário):**

```nginx
server {
    listen 80;
    server_name fardamento.leonardogeja.com.br;

    root /home/user/htdocs/srv1163656.hstgr.cloud/public;
    index index.php index.html index.htm;

    charset utf-8;
    client_max_body_size 20M;

    access_log /var/log/nginx/fardamento-access.log;
    error_log /var/log/nginx/fardamento-error.log;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico {
        access_log off;
        log_not_found off;
    }

    location = /robots.txt {
        access_log off;
        log_not_found off;
    }

    error_page 404 /index.php;

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass 127.0.0.1:18000;  # Ajuste se necessário
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

**Salvar:** `Ctrl+X`, `Y`, `Enter`

**Verificar configuração:**
```bash
sudo nginx -t
```

**Se estiver OK, recarregar Nginx:**
```bash
sudo systemctl reload nginx
```

---

## Passo 7: Configurar Laravel

```bash
cd /home/user/htdocs/srv1163656.hstgr.cloud

# Limpar caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Recriar caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Criar link simbólico do storage
php artisan storage:link
```

---

## Passo 8: Compilar Assets (se necessário)

```bash
cd /home/user/htdocs/srv1163656.hstgr.cloud

# Instalar dependências do NPM
npm install

# Compilar assets
npm run build
```

---

## Passo 9: Verificar DNS

**Verificar se o DNS está configurado corretamente:**

```bash
# Verificar resolução DNS
nslookup fardamento.leonardogeja.com.br

# Ou
dig fardamento.leonardogeja.com.br
```

**O DNS deve apontar para o IP da VPS:**
- Tipo: A
- Nome: fardamento
- Valor: IP da VPS (ex: 185.173.111.112)

---

## Passo 10: Testar o Site

```bash
# Testar localmente na VPS
curl -I http://fardamento.leonardogeja.com.br

# Ver logs em tempo real
sudo tail -f /var/log/nginx/fardamento-error.log
sudo tail -f /var/log/nginx/fardamento-access.log
```

**Acessar no navegador:**
```
http://fardamento.leonardogeja.com.br
```

---

## Troubleshooting

### Erro 403 Forbidden
```bash
# Verificar permissões
ls -la /home/user/htdocs/srv1163656.hstgr.cloud/public
sudo chmod -R 755 /home/user/htdocs/srv1163656.hstgr.cloud/public
```

### Erro 502 Bad Gateway
```bash
# Verificar se PHP-FPM está rodando
sudo systemctl status php8.3-fpm

# Verificar se está escutando na porta correta
sudo netstat -tlnp | grep 18000
```

### Página não encontrada (404)
```bash
# Limpar caches do Laravel
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan view:clear

# Recriar caches
php artisan config:cache
php artisan route:cache
```

### Ver logs do Laravel
```bash
tail -50 /home/user/htdocs/srv1163656.hstgr.cloud/storage/logs/laravel.log
```

---

## Checklist Final

- [ ] Arquivo `.env` configurado com APP_KEY gerado
- [ ] Banco de dados criado e migrations executadas
- [ ] Permissões do diretório configuradas
- [ ] PHP-FPM 8.3 rodando na porta 18000
- [ ] Nginx configurado e recarregado
- [ ] Caches do Laravel limpos e recriados
- [ ] Storage link criado
- [ ] DNS configurado e propagado
- [ ] Site acessível no navegador

---

## Scripts Automatizados

Se preferir usar scripts automatizados:

```bash
# 1. Configurar Nginx
sudo bash configurar-nginx-completo.sh

# 2. Encontrar e configurar PHP-FPM
sudo bash encontrar-php-fpm.sh

# 3. Corrigir Laravel
sudo bash corrigir-laravel.sh
```

