<?php

use App\Http\Controllers\OuterController; //Jangan lupa buat import
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

//index.homepage
Route::controller(OuterController::class)->group(function() {
Route::get('/', 'index')->name('home');
Route::get('/article/{id}', 'article_detail')->name('article_detail');

});

//ini user dan validation pages
Route::controller(UsersController::class)->group(function () {
    Route::get('/login', 'login_form')->name('login_form'); //fungsi name untuk memudahkan ketika mengrim atau melempar  action
    Route::post('/login', 'login_action')->name('login_action');
    //setiap ganti name jangan lupa php_artisan_optimize
    Route::get('/register', 'register_form')->name('register_form');
    Route::post('/register', 'register_action')->name('register_action');

    Route::get('/dashboard', 'dashboard_index')->name('dashboard_index');
    Route::post('/logout', 'dashboard_logout')->name('dashboard_logout');

    Route::get('/tambah','article_show_form')->name('article_show_form');
    Route::post('/article/add', 'article_add_action')->name('article_add_action');
    Route::get('/article/{id}/delete', 'article_delete_action')->name('article_delete_action');
    Route::get('/article/{id}/edit', 'article_edit_action')->name('article_edit_action');
    Route::put('/article/{id}/update', 'article_update_action')->name('article_update_action');
});