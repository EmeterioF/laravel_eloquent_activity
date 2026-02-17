# INSTRUCTIONS TO SET UP AND RUN THE PROJECT

### 1. Install dependencies
```bash
composer install

cp .env.example .env

php artisan key:generate

php artisan migrate:fresh --seed

composer run dev
