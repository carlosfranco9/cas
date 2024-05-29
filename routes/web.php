<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get("/casClient", function () {

    phpCAS::setLogger();
    // Enable verbose error messages. Disable in production!
    phpCAS::setVerbose(true);

    list ($cas_host, $cas_context, $cas_port, $client_service_name) = [
        '172.19.135.28', '/cas', 8099, 'http://172.19.135.28:8000'
    ];
    // Initialize phpCAS
    phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context, $client_service_name);

    phpCAS::setNoCasServerValidation();
    phpCAS::forceAuthentication();

    dump(phpCAS::getUser());
});
