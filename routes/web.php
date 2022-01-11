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
    Person::setFirstName('benitto');
    Person::setLastName('raj');
    dump(Person::getName());

    dd(Person::calculateBMI(57.3,1.7));
});

Route::get('charge', 'PaymentController');