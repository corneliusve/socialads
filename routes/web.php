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

Route::get('/test', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){

    Route::get('/{slug}', [

        'uses' => 'profileController@index',
        'as' => 'profile'

    ]);

    Route::get('/project/create', [

        'uses' => 'projectController@create',
        'as' => 'project.create'

    ]);

    Route::post('/project/store', [

        'uses' => 'projectController@store',
        'as' => 'project.store'

    ]);

    Route::get('/project/show/{id}', [

        'uses' => 'projectController@show',
        'as' => 'project.show'

    ]);




});
