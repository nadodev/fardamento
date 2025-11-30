# Deploy do Fardamento na VPS Hostinger

## Pré-requisitos

1. Acesso SSH à VPS
2. PHP 8.3+ instalado
3. Composer instalado
4. Node.js e NPM instalados
5. MySQL/MariaDB instalado
6. Nginx ou Apache configurado

## Passos para Deploy

### 1. Conectar via SSH
```bash
ssh usuario@seu-ip-vps
```

### 2. Criar diretório do projeto
```bash
mkdir -p /var/www/fardamento
cd /var/www/fardamento
```

### 3. Fazer upload dos arquivos
Faça upload de todos os arquivos do projeto (exceto node_modules, vendor, .env)

### 4. Configurar arquivo .env
```bash
cp .env.example .env
nano .env
```

Configure as seguintes variáveis:
```
APP_NAME="Fardamentos"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://fardamento.leonardogeja.com.br

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fardamento
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 5. Gerar chave da aplicação
```bash
php artisan key:generate
```

### 6. Executar script de deploy
```bash
chmod +x deploy.sh
./deploy.sh
```

### 7. Configurar Nginx

Crie o arquivo `/etc/nginx/sites-available/fardamento`:

```nginx
server {
    listen 80;
    server_name fardamento.leonardogeja.com.br;
    root /var/www/fardamento/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Ativar o site:
```bash
ln -s /etc/nginx/sites-available/fardamento /etc/nginx/sites-enabled/
nginx -t
systemctl reload nginx
```

### 8. Configurar SSL (Let's Encrypt)
```bash
certbot --nginx -d fardamento.leonardogeja.com.br
```

### 9. Criar banco de dados
```bash
mysql -u root -p
```

```sql
CREATE DATABASE fardamento CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'fardamento'@'localhost' IDENTIFIED BY 'senha_segura';
GRANT ALL PRIVILEGES ON fardamento.* TO 'fardamento'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 10. Executar migrations e seeders
```bash
php artisan migrate --force
php artisan db:seed --force
```

## Comandos úteis

- Ver logs: `tail -f storage/logs/laravel.log`
- Limpar cache: `php artisan cache:clear`
- Otimizar: `php artisan optimize`

