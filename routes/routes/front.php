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

Route::get('/tes', function () {
    return view('welcome');
});

Route::get("/", 'Front\Home@home');
Route::get("/about", 'Front\Home@about');
Route::get("/product", 'Front\Home@product');
Route::get("/gallery", 'Front\Home@gallery');
Route::get("/blog", 'Front\Home@blog');
Route::get("/blog/detail/{id}", 'Front\Home@blog_detail');
Route::get("/contact", 'Front\Home@contact');
Route::post("/contact_action", 'Front\Home@contact_action');
