# Clone o repositório
git clone https://github.com/seu-usuario/nome-do-repo.git

# Entre na pasta
cd nome-do-repo

# Instale as dependências
composer install

# Copie o .env
cp .env.example .env  # ou copie manualmente

# Gere a chave
php artisan key:generate

# Crie o banco de dados SQLite
touch database/database.sqlite  # ou crie manualmente

# Rode as migrations
php artisan migrate

# Inicie o servidor
php artisan serve
