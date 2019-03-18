<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------public static function paginate($int)
    {
    }--------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Category;
use App\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', 'Pagination@products');
//Route::get('/', function () {
//    $products = Products::all();
//    return view('welcome', [
//        'products' => $products
//    ]);
//});

Auth::routes();
Route::group(['prefix' => '/admin', 'middleware' => ['admin']], function () {
    Route::get('/', 'UserController@index')->name('admin');
    Route::get('/category', 'CategoryController@index')->name('admin_category');
    Route::get('/category/create', 'CategoryController@create')->name('category_create');
    Route::get('/category/edit/{category}', 'CategoryController@edit')->name('category_edit');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category_update');
    Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category_destroy');
    Route::get('/product', 'ProductController@index')->name('admin_product');
    Route::get('/product/create', 'ProductController@create')->name('product_create');
});


//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/category/store', 'CategoryController@store')->name('category_store');
Route::get('/category/{id}', 'Pagination@action')->name('category_action');
Route::get('/home', 'Pagination@home')->name('home');
//Route::get('/category/{id}', 'CategoryController@action')->name('category_action');

Route::get('/category/{id}/{id_prod}', 'CategoryController@showOne')->name('show_one');
Route::get('/product/{id}', 'ProductController@single')->name('product_single');
Route::post('/product/save', 'ProductController@saveOrder')->name('order');

Route::post('/product/store', 'ProductController@store')->name('product_store');
Route::post('/product/edit/{category}', 'ProductController@edit')->name('product_edit');
Route::post('/product/update/{id}', 'ProductController@update')->name('product_update');
Route::post('/product/destroy/{id}', 'ProductController@destroy')->name('product_destroy');


