<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get(
    '/memory',
    function () {
        echo "<pre>";

        $opache = opcache_get_status();

        echo "Total Memory In use MB:" . ($opache['memory_usage']['used_memory'] + $opache['memory_usage']['free_memory']
                + $opache['memory_usage']['wasted_memory']) / 1048576;

        echo "<br />";

        print_r($opache);

        return "";

    }
);

