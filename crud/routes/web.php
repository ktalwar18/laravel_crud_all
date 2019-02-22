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

Route::get("create","Testing@create");
Route::post("store","Testing@store");
Route::get("read","Testing@read");
Route::get("show/{id}","Testing@show");
Route::get("edit/{id}","Testing@edit");
Route::post("update/{id}","Testing@update")->name('update');
Route::get("delete/{id}","Testing@destroy");