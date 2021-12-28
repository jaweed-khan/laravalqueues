<?php

use Illuminate\Support\Facades\Route;

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

    //(new \App\Jobs\SendWelcomeEmail())->handle();

    foreach(range(1,100)as $i){
        \App\Jobs\SendWelcomeEmail::dispatch();
    }

    

    return view('welcome');
});
