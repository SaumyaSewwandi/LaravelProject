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

/*Route::get('/', function () {
    return view('layouts.Frontend.index');
});*/

Auth::routes();

Route::get('Category', 'HomeController@Category')->name('Category');

Route::get('/', 'Frontend@index')->name('index');

Route::post('addcategory', 'Dashboard@saveCategory')->name('saveCategory');
Route::get('editcategory','Dashboard@editcategory')->name('editcategory');
Route::post('updatecategory','Dashboard@updatecategory')->name('updatecategory');
Route::get('deletecategory','Dashboard@deletecategory')->name('deletecategory');

Route::get('product', 'Dashboard@productpage')->name('productpage');
Route::get('addProduct', 'Dashboard@addproductpage')->name('addproductpage');
Route::post('saveproduct','Dashboard@saveproductdata')->name('saveproductdata');
Route::get('editproduct','Dashboard@editproductpage')->name('editproductpage');
//Route::get('editproduct', 'Dashboard@editproductpagecat')->name('editproductpagecat');
Route::post('updateproduct','Dashboard@updateproduct')->name('updateproduct');
Route::get('deleteproduct','Dashboard@deleteproduct')->name('deleteproduct');
