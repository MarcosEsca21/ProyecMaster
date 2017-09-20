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

Route::get('panel', function () {
    return view('MENU.menu');
});

Route::group(['prefix' => 'module/'], function () {
    Route::get('/',                array('uses' => 'INICIO\InicioManagerController@manager'));
    Route::post('form',            array('uses' => 'INICIO\InicioManagerController@postForm'));
    Route::post('do-post',         array('uses' => 'INICIO\InicioManagerController@doPost'));
});
