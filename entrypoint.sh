#!/bin/bash

# Esperar o banco de dados ficar disponível
until nc -z -v -w30 db 3306; do
  echo "Aguardando conexão com o banco de dados..."
  sleep 5
done
echo "Banco de dados disponível - Continuando..."

# Rodar as migrações
php artisan migrate --force

# Iniciar o servidor Laravel
php artisan serve --host=0.0.0.0 --port=8000
