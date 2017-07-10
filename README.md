<h1 align="center">Vulcan CRUD</h1>

**Vulcan CRUD** is a package for Laravel 5 that provides scaffolding and functionality for generating CRUD related resources within a project.



## Installation

### Step 1: Composer

From the command line, run:

```shell
composer require ... # the project is still in development and will be on packagist.org soon
```

### Step 2: Service Provider

Within your Laravel project, open config/app.php and, within the providers array, append:

```php
'providers' => [
    // ...
    Weerd\VulcanCrud\VulcanCrudServiceProvider::class,
    //...
],
```

This will bootstrap the package into Laravel.

