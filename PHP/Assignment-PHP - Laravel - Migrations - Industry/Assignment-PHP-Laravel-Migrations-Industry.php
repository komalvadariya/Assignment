<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Migrations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-2 mb-2">Laravel Migrations </h2>
        <ul>
            <li>Migrations are like version control for your database, allowing your team to define and share the application's database schema definition.</li>
            <li>The Laravel Schema facade provides database agnostic support for creating and manipulating tables across all of Laravel's supported database systems. Typically, migrations will use this facade to create and modify database tables and columns.</li>
            <li>Laravel uses the PDO (PHP Data Objects) extension to connect to databases. In order to configure your database in Laravel, you will need to update the config/database.php file with your database credentials.</li>
            <li>Open the <b>.env</b> file in the root directory of your Laravel project</li>
            <li>
                <pre>
                     DB_CONNECTION=mysql
                    DB_HOST=127.0.0.1
                    DB_PORT=3306
                    <b>DB_DATABASE=laravel-new</b>
                    DB_USERNAME=root
                    DB_PASSWORD=
            </pre>
            </li>
            <li>Change DB_DATABASE = as Creating in DataBase. </li>
        </ul>
        <ul>
            <h3>Generating Migrations:</h3>
            <li>You may use the make:migration Artisan command to generate a database migration.</li>
            <li> command: php artisan make:migration create_<b>tablename</b>_table. </li>
            <li>Open the generated migration file and define the schema changes you want to make to the database. You can use methods like create, table, addColumn, dropColumn, foreign, and more to define the table structure.</li>
            <li> Create table Example :
                <pre>
                use Illuminate\Database\Schema\Blueprint;
                use Illuminate\Support\Facades\Schema;

                Schema::create('tablename', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email');
                    $table->timestamps();
                });</pre>
            </li>
        </ul>
        <ul>
            <h3>Alter Table:</h3>
            <li>command: php artisan make:migration create_<b>alttablename</b>_table --table = tablename. </li>
            <li>To run create table in Database :<b>php artisan migrate</b></li>
        </ul>
        <ul>
            <h3>Rolling Back Migrations:</h3>
            <li>If you need to revert a migration, you can use the migrate:rollback command:<b>php artisan migrate:rollback</b></li>
            <li>This will undo the last batch of migrations. You can also use the migrate:reset command to roll back all migrations. </li>
        </ul>
        <ul>
            <h3>Rolling Back & Re-migrating::</h3>
           <li>To rollback and then re-run all migrations, you can use the migrate:refresh command:<b>php artisan migrate:refresh</b></li>
           <li>This is useful during development when you need to quickly reset the database structure.</li>
        </ul>
    </div>
</body>

</html>