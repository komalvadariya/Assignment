<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP - Introduction of Laravel PHP Framework - Industry</title>
</head>

<body>
    <div class="container mt-1">
        <h1 class="text-center">PHP - Introduction of Laravel PHP Framework - Industry</h1>
        <b> What is the Laravel Framework?</b>
        <p>Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern. Laravel reuses the existing components of different frameworks which helps in creating a web application. The web application thus designed is more structured and pragmatic.

Laravel offers a rich set of functionalities that incorporates the basic features of PHP frameworks like CodeIgniter, Yii, and other programming languages like Ruby on Rails. Laravel has a very rich set of features that will boost the speed of web development.

With Laravel, you can build applications for any type of business or organization. Whether it’s eCommerce, social media marketing, or an online ticketing system, you can create any type of web application with Laravel because it’s flexible and scalable enough to accommodate any size project easily.</p>
         <b>What is Laravel Routing</b>
         <p>Routing is one of the essential concepts in Laravel. Routing in Laravel allows you to route all your application requests to their appropriate controller. The main and primary routes in Laravel acknowledge and accept a URI (Uniform Resource Identifier) along with a closure, given that it should have to be a simple and expressive way of routing. In this tutorial, you will learn about the routing concept of Laravel.</p>
         <b>What is Laravel Controllers</b>
         <p>Controllers are another essential feature provided by Laravel. In place of defining the handling request logic in the form of Closures in route files, it is possible to organize this process with the help of Controller classes. So what the controllers do? Controllers are meant to group associated request handling logic within a single class. In your Laravel project, they are stored in the app/Http/Controllers directory. The full form of MVC is Model View Controller, which directs traffic among the Views and the Models.</p>
         <b>What is Laravel Views</b>
         <p>To get started, let's first define what views are in the context of Laravel. A view is a file containing a mix of PHP code, HTML markup, and Blade templates. These templates contain placeholders for dynamic content and are used to define the structure and layout of a web page. When a user requests the application, the view is rendered and returned to the user's browser.

Views are stored in the resources/views directory of the Laravel project. By default, Laravel comes with a set of predefined views, such as welcome.blade.php and errors/404.blade.php</p>

       <b> Explain ORM ?</b>
        <ul>
            <li>
                <p>Eloquent ORM (Object Relation Mapper) is easy to use for users who know how to use objects in PHP.</p>
            </li>
            <li>
                <p>The ORM is an important feature of the Laravel framework, considered a powerful and expensive feature of Laravel. The ORM works with database objects and is used to make relationships with database tables.</p>
            </li>
            <li>
                <p>Each table of the database is mapped with a particular eloquent model.The model object contains various methods to retrieve and update data from the database table. </p>
            </li>
            <li>
                <p>Eloquent ORM can be used with multiple databases by implementing ActiveMethod. This feature makes database-related tasks, such as defining relationships, simpler by defining the database tables. </p>
            </li>
            </ul>
      
       <b> Explain - Eloquent Relationships ? </b>
        <ul>
            <li>
                <p>When working with tables in a relational database, we can characterize relationships as connections between tables. This helps you organize and structure data effortlessly allowing for superior readability and handling of data.</p>
            </li>
            <li>
                <p>There are three types of database relationships in practice:</p>
                <ul>
                    <li>one-to-one : One record in a table is associated with one, and only one, in another table. For example, a person and a social security number.</li>
                    <li>one-to-many : One record is associated with multiple records in another table. For instance, a writer and their blogs.</li>
                    <li>many-to-many : Multiple records in a table are associated with multiple records in another table. Namely, students and the courses they are enrolled in.</li>
                </ul>
            </li>
           
        </ul>
       <b>What are migrations in Laravel?</b> 
<p>Migration is a feature of Laravel that allows you to modify and share the application's database schema. It will enable you to alter the table by adding a new column or deleting an existing column.

If you have ever had to tell a teammate to add a column to their local database schema manually, you've faced the problem that database migrations solve. Migrations are like version control for your database, allowing your team to modify and share the application's database schema. Migrations are typically paired with Laravel's schema builder to build your application's database schema.

The Laravel Schema facade provides database agnostic support for creating and manipulating tables across all of Laravel's supported database systems.
</p>
<b>What are seeders in Laravel?</b>
<p>Laravel's database seeding feature allows you to quickly insert data into your database. It is helpful for development environments where you may not have access to your production database.

Laravel includes the ability to seed your database with data. By default, a Database seeder class is defined for you. You may use the call method from this class to run other seed classes. All seed classes are stored in the database/seeders directory.

A seeder class only contains one method: run. This method is called when the db:seed Artisan command is executed. You may use the query builder to insert data or Eloquent model factories.

</p>

<b>What are Models?</b>
 <p>Laravel is a framework that follows the Model-View-Controller design pattern. All your models, views, and controllers are stored in their directories, making it easy to keep track of everything.

You'll use controllers to handle user requests and retrieve data by leveraging models. Models interact with your database and recover your objects’ information. Finally, views render pages.

Laravel comes with a fantastic, built-in command line interface called Artisan CLI that provides complete commands to help you build your application.
</p>    
<b> What is Middleware in Laravel?</b>
<p>Middleware in laravel is a platform that works as a bridge between the request and the response. The main aim of middleware is to provide the mechanism for investigating HTTP requests entering into your application. For instance, middleware in laravel ensures that the user of your particular application is authenticated. If they find that the user is not authenticated, it will redirect the user to the main login page of the application.

Middleware in laravel also helps you to handle a request from a user who has already been authenticated. For example, if you want to display information about a user who has already been established, then middleware will help you by providing this functionality within your application.</p>

<b>What are some common Artisan commands in Laravel?  </b>
<li>make:controller – Creates a new Controller file in App/Http/Controllers folder</li>
<li>make:model – Creates a new Eloquent model class</li>
<li>make:migration – Creates a new migration file</li>
<li>make:seeder – Creates a new database seeder class</li>
<li>make:request – Creates a new form request class in App/Http/Requests folder</li>
<li>make:request – Creates a new form request class in App/Http/Requests folder</li>
<li>make:command – Creates a new Artisan command</li>
<li>make:mail – Creates a new email class</li>
<li>make:channel – Creates a new channel class for broadcasting </li>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>