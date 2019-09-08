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
Route::get('/main', function () {
    return view('kaifan.menu.main');
});
Route::get('/appetizer', function () {
    return view('kaifan.menu.appetizer');
});
Route::get('/breakfast', function () {
    return view('kaifan.menu.breakfast');
});
Route::get('/dessert', function () {
    return view('kaifan.menu.dessert');
});
Route::get('/drink', function () {
    return view('kaifan.menu.drink');
});
Route::get('/favorite', function () {
    return view('kaifan.menu.favorite');
});
Route::get('/lazymeal', function () {
    return view('kaifan.menu.lazymeal');
});
Route::get('/side', function () {
    return view('kaifan.menu.side');
});


Route::resource('menu', 'MenusController');
Route::get('/api_ajax', 'MenusController@api_ajax');


Auth::routes();

Route::get('/home', 'MenusController@index')->name('home');
