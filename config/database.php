<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_OBJ,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'scool' => [
            'host' => env('DB_SCOOL_HOST', 'localhost'),
            'port' => env('DB_SCOOL_PORT', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE', 'scool'),
            'username' => env('DB_SCOOL_USERNAME', 'root'),
            'password' => env('DB_SCOOL_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'scool_2015-16' => [
            'host' => env('DB_SCOOL_HOST_1516', 'localhost'),
            'port' => env('DB_SCOOL_PORT_1516', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE_1516', 'scool201516'),
            'username' => env('DB_SCOOL_USERNAME_1516', 'root'),
            'password' => env('DB_SCOOL_PASSWORD_1516', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'scool_2014-15' => [
            'host' => env('DB_SCOOL_HOST_1415', 'localhost'),
            'port' => env('DB_SCOOL_PORT_1415', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE_1415', 'scool201415'),
            'username' => env('DB_SCOOL_USERNAME_1415', 'root'),
            'password' => env('DB_SCOOL_PASSWORD_1415', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'scool_2013-14' => [
            'host' => env('DB_SCOOL_HOST_1314', 'localhost'),
            'port' => env('DB_SCOOL_PORT_1314', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE_1314', 'scool201314'),
            'username' => env('DB_SCOOL_USERNAME_1314', 'root'),
            'password' => env('DB_SCOOL_PASSWORD_1314', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'scool_2012-13' => [
            'host' => env('DB_SCOOL_HOST_1213', 'localhost'),
            'port' => env('DB_SCOOL_PORT_1213', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE_1213', 'scool201213'),
            'username' => env('DB_SCOOL_USERNAME_1213', 'root'),
            'password' => env('DB_SCOOL_PASSWORD_1213', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'scool_2011-12' => [
            'host' => env('DB_SCOOL_HOST_1112', 'localhost'),
            'port' => env('DB_SCOOL_PORT_1112', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE_1112', 'scool201112'),
            'username' => env('DB_SCOOL_USERNAME_1112', 'root'),
            'password' => env('DB_SCOOL_PASSWORD_1112', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'scool_2010-11' => [
            'host' => env('DB_SCOOL_HOST_1011', 'localhost'),
            'port' => env('DB_SCOOL_PORT_1011', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_SCOOL_DATABASE_1011', 'scool201011'),
            'username' => env('DB_SCOOL_USERNAME_1011', 'root'),
            'password' => env('DB_SCOOL_PASSWORD_1011', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'ebre_escool' => [
            'host' => env('DB_EBRE_ESCOOL_HOST', 'localhost'),
            'port' => env('DB_EBRE_ESCOOL_PORT', '3306'),
            'driver' => 'mysql',
            'database' => env('DB_EBRE_ESCOOL_DATABASE', 'ebre_escool'),
            'username' => env('DB_EBRE_ESCOOL_USERNAME', 'root'),
            'password' => env('DB_EBRE_ESCOOL_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
