<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', 'Dashboard@index')->name('home.index');

    Route::get('/', 'Landing@index')->name('landing');

    Route::post('/register', 'Auth@register')->name('register');
    Route::post('/survey', 'SurveyPenggunaController@store')->name('survey');

    Route::get('/detail-berita/{params}', 'Landing@detail_berita')->name('detail-berita');

    Route::group(['prefix' => 'login', 'middleware' => ['guest'], 'as' => 'login.'], function () {
        Route::get('/login-akun', 'Auth@show')->name('login-akun');
        Route::post('/login-proses', 'Auth@login_proses')->name('login-proses');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
        Route::get('/dashboard-admin', 'Dashboard@dashboard')->name('dashboard-admin');

        Route::get('/chart', 'Dashboard@areaChart')->name('chart');

        Route::get('/data-alumni', 'DataAlumni@index')->name('data-alumni');
        Route::get('/get-data-alumni', 'DataAlumni@get')->name('get-data-alumni');

        Route::get('/data-maba', 'DataMabaController@index')->name('data-maba');
        Route::get('/get-data-maba', 'DataMabaController@get')->name('get-data-maba');
        Route::get('/show-data-maba/{params}', 'DataMabaController@show')->name('show-data-maba');
        Route::post('/add-data-maba', 'DataMabaController@store')->name('add-data-maba');
        Route::post('/update-data-maba/{params}', 'DataMabaController@update')->name('update-data-maba');
        Route::delete('/delete-data-maba/{params}', 'DataMabaController@delete')->name('delete-data-maba');

        Route::get('/data-loker', 'LokerController@index')->name('data-loker');
        Route::get('/get-data-loker', 'LokerController@get')->name('get-data-loker');
        Route::get('/show-data-loker/{params}', 'LokerController@show')->name('show-data-loker');
        Route::post('/add-data-loker', 'LokerController@store')->name('add-data-loker');
        Route::post('/update-data-loker/{params}', 'LokerController@update')->name('update-data-loker');
        Route::delete('/delete-data-loker/{params}', 'LokerController@delete')->name('delete-data-loker');

        Route::get('/berita', 'BeritaController@index')->name('berita');
        Route::get('/add-view-berita', 'BeritaController@add')->name('add-view-berita');
        Route::get('/edit-view-berita/{params}', 'BeritaController@edit')->name('edit-view-berita');
        Route::get('/get-berita', 'BeritaController@get')->name('get-berita');
        Route::get('/show-berita/{params}', 'BeritaController@show')->name('show-berita');
        Route::post('/add-berita', 'BeritaController@store')->name('add-berita');
        Route::post('/update-berita/{params}', 'BeritaController@update')->name('update-berita');
        Route::delete('/delete-berita/{params}', 'BeritaController@delete')->name('delete-berita');

        Route::get('/data-survey', 'SurveyPenggunaController@index')->name('data-survey');
        Route::get('/get-data-survey', 'SurveyPenggunaController@get')->name('get-data-survey');
    });

    Route::group(['prefix' => 'alumni', 'middleware' => ['auth'], 'as' => 'alumni.'], function () {
        Route::get('/dashboard-alumni', 'Dashboard@dashboard_alumni')->name('dashboard-alumni');

        Route::get('/profil', 'Profil@index')->name('profil');
        Route::post('/add-profil', 'Profil@add_profil')->name('add-profil');

        Route::get('/kesanpesan', 'KesanPesanController@index')->name('kesanpesan');
        Route::post('/add-kesanpesan', 'KesanPesanController@store')->name('add-kesanpesan');
    });

    Route::get('/logout', 'Auth@logout')->name('logout');
});
