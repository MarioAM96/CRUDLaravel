# CRUD Laravel

# Simple CRUD Laravel

# **This project was created in Laravel**

To begin this project need Composer, Laravel, XAMPP OR WAMP installed

- Create the project with the following command, in the root projects directory

```jsx
composer create-project laravel/laravel example-app
```

- Create de database
- Fill the database information in .env file in the root project directory
- To create the table inside the project

```jsx
php artisan make:model Product -m
```

- Edit the model in database for the migrations

```jsx
php artisan migrate
```

- To create the CRUD in the project

```jsx
composer require ibex/crud-generator - -dev
php artisan vendor:publish --tag-crud
php artisan make:crud "table_name"

composer require laravel/ui
php artisan ui bootstrap
php artisan ui bootstrap --auth
```

- To run the project

```jsx
npm install
npm run dev

php artisan serve
```

# **To run this project locally**

- **Clone this repo from Github:** https://github.com/MarioAM96/PortafolioMario.git
- Pull Laravel/php project from git provider.
- Rename `.env.example` file to `.env`inside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install` or `php composer.phar install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

![Captura de pantalla 2023-04-28 170815](https://user-images.githubusercontent.com/91484233/235263077-3d4bc034-df94-48ea-9230-d375f9339271.png)

![Captura de pantalla 2023-04-28 170724](https://user-images.githubusercontent.com/91484233/235263110-a17240e8-b78f-4a6b-a975-a8fe909a627b.png)

<img width="1063" alt="Screenshot 2023-04-28 at 17 17 49" src="https://user-images.githubusercontent.com/91484233/235263212-f701e56d-42ea-4b6d-84da-4b939d50783b.png">


# **To run this project locally**

To run this project in a local network as a production app, use this commands

```jsx
npm install
npm run dev -> npm run build

php artisan serve --host 192.168.1.153 --port=8000
```
