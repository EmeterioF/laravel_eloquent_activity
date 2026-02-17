###INSTRUCTIONS TO SET UP AND RUN THE PROJECT

###Install dependencies

composer install

###Create your environment file

cp .env.example .env

This will create a .env file from the example. You can edit it to set your database name, username, and password.

###Generate the application key

php artisan key:generate

This key is required for security, sessions, and encryption.

###Run migrations and seed the database

php artisan migrate:fresh --seed

This will create all tables and fill them with sample data.

###Start the development server

composer run dev
