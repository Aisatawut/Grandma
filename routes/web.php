<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Product;
use Illuminate\Support\Facades\Auth;
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
    $products = Product::all();


    return view('welcome', compact('products'));
});

Route::get('/dashboard', 'DashboardController@index');




Route::get('/content', 'ContentController@index')->name('content');
Route::get('/content/create', 'ContentController@create')->name('content_create');
Route::post('/content/add', 'ContentController@add')->name('content_add');
Route::get('/content/remove/{id}', 'ContentController@destroy')->name('content_remove');
Route::get('/content/edit/{id}', 'ContentController@edit')->name('content_edit');
Route::post('/content/update/{id}', 'ContentController@update')->name('content_update');




Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/create', 'CategoryController@create')->name('category_create');
Route::post('/category/add', 'CategoryController@add')->name('category_add');
Route::get('/category/remove/{id}', 'CategoryController@destroy')->name('category_remove');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category_edit');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category_update');




Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/create', 'ProductsController@create')->name('products_add');
Route::post('/products/add', 'ProductsController@add')->name('products_create');
Route::get('/products/remove/{id}', 'ProductsController@destroy')->name('products_remove');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products_edit');
Route::post('/products/update/{id}', 'ProductsController@update')->name('products_update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
