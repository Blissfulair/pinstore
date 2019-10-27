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
    Route::get('/bootcamp', [
        'uses'=>'FrontendController@bootcamp',
        'as'=>'bootcamp'
    ]);
    Route::post('/register_training', [
        'uses'=>'FrontendController@register_training',
        'as'=>'register_training'
    ]);
    Route::get('/training', [
        'uses'=>'FrontendController@train',
        'as'=>'train'
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
    Route::get('/career/{name}', [
        'uses'=>'FrontendController@career',
        'as'=>'career'
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
    Route::post('/training_register', [
        'uses'=>'FrontendController@training_register',
        'as'=>'training_register'
    ]);




    //Backend Routes
    Route::get('/dashboard', [
        'uses'=>'BackendController@dashboard',
        'as'=>'dashboard',
        'middleware'=>'auth'
    ]);
    Route::get('/setting', [
        'uses'=>'BackendController@setting',
        'as'=>'setting',
        'middleware'=>'auth'
    ]);
    Route::get('/create_service', [
        'uses'=>'BackendController@create_service',
        'as'=>'create_service',
        'middleware'=>'auth'
    ]);
    Route::get('/create_team', [
        'uses'=>'BackendController@create_team',
        'as'=>'create_team',
        'middleware'=>'auth'
    ]);
    Route::get('/aboutus', [
        'uses'=>'BackendController@aboutus',
        'as'=>'aboutus',
        'middleware'=>'auth'
    ]);
    Route::get('/create_career', [
        'uses'=>'BackendController@create_career',
        'as'=>'create_career',
        'middleware'=>'auth'
    ]);
    Route::get('/create_post', [
        'uses'=>'BackendController@create_post',
        'as'=>'create_post',
        'middleware'=>'auth'
    ]);
    Route::get('/create_user', [
        'uses'=>'BackendController@create_user',
        'as'=>'create_user',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_service', [
        'uses'=>'BackendController@manage_service',
        'as'=>'manage_service',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_team', [
        'uses'=>'BackendController@manage_team',
        'as'=>'manage_team',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_career', [
        'uses'=>'BackendController@manage_career',
        'as'=>'manage_career',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_post', [
        'uses'=>'BackendController@manage_post',
        'as'=>'manage_post',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_user', [
        'uses'=>'BackendController@manage_user',
        'as'=>'manage_user',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_service/{id}', [
        'uses'=>'BackendController@edit_service',
        'as'=>'edit_service',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_team/{id}', [
        'uses'=>'BackendController@edit_team',
        'as'=>'edit_team',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_career/{id}', [
        'uses'=>'BackendController@edit_career',
        'as'=>'edit_career',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_post/{id}', [
        'uses'=>'BackendController@edit_post',
        'as'=>'edit_post',
        'middleware'=>'auth'
    ]);
    Route::get('/edit_user/{id}', [
        'uses'=>'BackendController@edit_user',
        'as'=>'edit_user',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_post/{id}', [
        'uses'=>'BackendController@destroy_post',
        'as'=>'destroy_post',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_user/{id}', [
        'uses'=>'BackendController@destroy_user',
        'as'=>'destroy_user',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_service/{id}', [
        'uses'=>'BackendController@destroy_service',
        'as'=>'destroy_service',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_team/{id}', [
        'uses'=>'BackendController@destroy_team',
        'as'=>'destroy_team',
        'middleware'=>'auth'
    ]);
    Route::get('/destroy_career/{id}', [
        'uses'=>'BackendController@destroy_career',
        'as'=>'destroy_career',
        'middleware'=>'auth'
    ]);
    Route::post('/save.service', [
        'uses'=>'BackendController@save_service',
        'as'=>'save.service',
        'middleware'=>'auth'
    ]);
    Route::post('/save.team', [
        'uses'=>'BackendController@save_team',
        'as'=>'save.team',
        'middleware'=>'auth'
    ]);
    Route::post('/save.aboutus', [
        'uses'=>'BackendController@save_aboutus',
        'as'=>'save.aboutus',
        'middleware'=>'auth'
    ]);
    Route::post('/save.setting', [
        'uses'=>'BackendController@save_setting',
        'as'=>'save.setting',
        'middleware'=>'auth'
    ]);
    Route::post('/update.setting', [
        'uses'=>'BackendController@update_setting',
        'as'=>'update.setting',
        'middleware'=>'auth'
    ]);
    Route::post('/save.career', [
        'uses'=>'BackendController@save_career',
        'as'=>'save.career',
        'middleware'=>'auth'
    ]);
    Route::post('/save.post', [
        'uses'=>'BackendController@save_post',
        'as'=>'save.post',
        'middleware'=>'auth'
    ]);
    Route::post('/save.user', [
        'uses'=>'BackendController@save_user',
        'as'=>'save_user',
        'middleware'=>'auth'
    ]);
    Route::post('/update.service/{id}', [
        'uses'=>'BackendController@update_service',
        'as'=>'update.service',
        'middleware'=>'auth'
    ]);
    Route::post('/update.team/{id}', [
        'uses'=>'BackendController@update_team',
        'as'=>'update.team',
        'middleware'=>'auth'
    ]);
    Route::post('/update.aboutus', [
        'uses'=>'BackendController@update_aboutus',
        'as'=>'update.aboutus',
        'middleware'=>'auth'
    ]);
    Route::post('/update.career/{id}', [
        'uses'=>'BackendController@update_career',
        'as'=>'update.career',
        'middleware'=>'auth'
    ]);
    Route::post('/update.post/{id}', [
        'uses'=>'BackendController@update_post',
        'as'=>'update.post',
        'middleware'=>'auth'
    ]);
    Route::post('/update.user/{id}', [
        'uses'=>'BackendController@update_user',
        'as'=>'update.user',
        'middleware'=>'auth'
    ]);
    Route::get('/manage_scholarship', [
        'uses'=>'BackendController@manage_scholarship',
        'as'=>'manage_scholarship',
        'middleware'=>'auth'
    ]);
    Route::get('/profile_setting', [
        'uses'=>'BackendController@profile_setting',
        'as'=>'profile_setting',
        'middleware'=>'auth'
    ]);
    Route::get('/profile', [
        'uses'=>'BackendController@profile',
        'as'=>'profile',
        'middleware'=>'auth'
    ]);
    Route::get('/mails', [
        'uses'=>'BackendController@message',
        'as'=>'mail',
        'middleware'=>'auth'
    ]);
    Route::post('/update_profile_setting', [
        'uses'=>'BackendController@update_profile_setting',
        'as'=>'update_profile_setting',
        'middleware'=>'auth'
    ]);
    Route::post('/update_profile_password', [
        'uses'=>'BackendController@update_profile_password',
        'as'=>'update_profile_password',
        'middleware'=>'auth'
    ]);
    Route::get('/update_message_ajax',[
        'uses'=>'BackendController@update_message_ajax',
        'as'=>'notification',
        'middleware'=>'auth'
    ]);
});


Route::get('/home', 'HomeController@index')->name('home');
