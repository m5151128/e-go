# 環境構築

## /etc/hostsへの追記

```
# e-go
127.0.0.1 e-go.localapp.jp
```

## docker起動

mac上で
```sh
cd ~/e-go/docker
docker-compose up -d
docker-compose exec laravel bash
```

コンテナ内で
```sh
composer install
cp .env.example .env
php artisan key:generate
```
