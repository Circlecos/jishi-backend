<?php

$DishServerIp = '127.0.0.10';
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


Route::post('/recommend','DishesController@recommend');

// Route::get('/recommendDish', function () {
//     return Response(view('recommendDish'))
//         ->header('content-type','application/json');
// });