<?php

return array(

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

    'connections' => array(

        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => 'am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
            'database'  => 'dnuwc8quwh9tx9at',
            'username'  => 'g8iq0e31jgwbpe8d',
            'password'  => 'lijlt7uugjc16ss0',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),

        'pgsql' => array(
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => 'homestead',
            'username' => 'homestead',
            'password' => 'secret',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ),

    ),

);
