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
    return view('welcome');
});

Route::prefix('company')->group(function () {

    Route::get('','CompanyController@index')->name('company.index');
    Route::get('create', 'CompanyController@create')->name('company.create');
    Route::post('store', 'CompanyController@store')->name('company.store');
    Route::get('edit/{company}', 'CompanyController@edit')->name('company.edit');
    Route::post('update/{company}', 'CompanyController@update')->name('company.update');
    Route::post('delete/{company}', 'CompanyController@destroy')->name('company.destroy');
    Route::get('show/{company}', 'CompanyController@show')->name('company.show');

});

Route::prefix('type')->group(function () {

    Route::get('','TypeController@index')->name('type.index');
    Route::get('create', 'TypeController@create')->name('type.create');
    Route::post('store', 'TypeController@store')->name('type.store');
    Route::get('edit/{type}', 'TypeController@edit')->name('type.edit');
    Route::post('update/{type}', 'TypeController@update')->name('type.update');
    Route::post('delete/{type}', 'TypeController@destroy' )->name('type.destroy');
    Route::get('show/{type}', 'TypeController@show')->name('type.show');

});

Route::prefix('contact')->group(function () {

    Route::get('','ContactController@index')->name('contact.index');
    Route::get('create', 'ContactController@create')->name('contact.create');
    Route::post('store', 'ContactController@store')->name('contact.store');
    Route::get('edit/{type}', 'ContactController@edit')->name('contact.edit');
    Route::post('update/{type}', 'ContactController@update')->name('contact.update');
    Route::post('delete/{type}', 'ContactController@destroy' )->name('contact.destroy');
    Route::get('show/{type}', 'ContactController@show')->name('contact.show');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
