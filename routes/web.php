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
Auth::routes();
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
    Route::post('/contact', [
        'uses'=>'FrontendController@contact_form',
        'as'=>'contact_form'
    ]);
    Route::get('/scholarship', [
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
    Route::get('/service/{name}', [
        'uses'=>'FrontendController@service_single',
        'as'=>'service'
    ]);
    Route::get('/post/{name}', [
        'uses'=>'FrontendController@post_single',
        'as'=>'post'
    ]);
    Route::get('/display_image/{filename}', [
        'uses'=>'FrontendController@display_image',
        'as'=>'display_image'
    ]);
    Route::post('/create_comment', [
        'uses'=>'FrontendController@create_comment',
        'as'=>'create_comment'
    ]);
    Route::post('/save.scholarship', [
        'uses'=>'FrontendController@save_scholarship',
        'as'=>'save_scholarship'
    ]);




    //Backend Routes
    Route::get('/dashboard', [
        'uses'=>'BackendController@dashboard',
        'as'=>'dashboard',
        'middleware'=>'auth'
    ]);
    Route::get('/create_service', [
        'uses'=>'BackendController@create_service',
        'as'=>'create_service',
        'middleware'=>'auth'
    ]);
    Route::get('/create_post', [
        'uses'=>'BackendController@create_post',
        'as'=>'create_post',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_service', [
        'uses'=>'BackendController@manage_service',
        'as'=>'manage_service',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_post', [
        'uses'=>'BackendController@manage_post',
        'as'=>'manage_post',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_service/{id}', [
        'uses'=>'BackendController@edit_service',
        'as'=>'edit_service',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_post/{id}', [
        'uses'=>'BackendController@edit_post',
        'as'=>'edit_post',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_post/{id}', [
        'uses'=>'BackendController@destroy_post',
        'as'=>'destroy_post',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_service/{id}', [
        'uses'=>'BackendController@destroy_service',
        'as'=>'destroy_service',
        'middleware'=>'auth'
    ]);
    Route::post('/save.service', [
        'uses'=>'BackendController@save_service',
        'as'=>'save.service',
        'middleware'=>'auth'
    ]);
    Route::post('/save.post', [
        'uses'=>'BackendController@save_post',
        'as'=>'save.post',
        'middleware'=>'auth'
    ]);
    Route::post('/update.service/{id}', [
        'uses'=>'BackendController@update_service',
        'as'=>'update.service',
        'middleware'=>'auth'
    ]);
    Route::post('/update.post/{id}', [
        'uses'=>'BackendController@update_post',
        'as'=>'update.post',
        'middleware'=>'auth'
    ]);
});


Route::get('/home', 'HomeController@index')->name('home');
