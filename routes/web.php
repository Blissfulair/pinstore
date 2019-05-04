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
if (env('APP_ENV') === 'production') {
    \URL::forceScheme('https');
}

Route::group(['middleware'=>['web']], function(){
    Route::get('/', [
        'uses'=>'FrontendController@index',
        'as'=>'index'
    ]);
    Route::get('/services', [
        'uses'=>'FrontendController@services',
        'as'=>'services'
    ]);
    Route::get('/about-us', [
        'uses'=>'FrontendController@about',
        'as'=>'about'
    ]);
    Route::get('/contact-us', [
        'uses'=>'FrontendController@contact',
        'as'=>'contact'
    ]);
    Route::get('/trainings', [
        'uses'=>'FrontendController@trainings',
        'as'=>'trainings'
    ]);
    Route::get('/careers', [
        'uses'=>'FrontendController@careers',
        'as'=>'careers'
    ]);
    Route::get('/bulletins', [
        'uses'=>'FrontendController@bulletins',
        'as'=>'bulletins'
    ]);
    Route::get('/service', [
        'uses'=>'FrontendController@service_single',
        'as'=>'service'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
