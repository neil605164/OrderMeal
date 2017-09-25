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
// 認證路由...
Route::auth();

// 須登入才可至底下路徑 [middleware 管制(中介層)]
Route::group(['middleware' => 'auth'], function () {

    // 登出
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/', function () {
        return view('main.index');
    });

    Route::get('/addstore', function () {
        return view('store.addstore');
    });

    Route::get('/editstore', function () {
        return view('store.editstore');
    });
});


// Route::get('/logout', array(
// 		'as' => 'account-sign-out',
// 		'uses' => 'Auth\LoginController@logout'
// 	));
// Route::get('/home', 'HomeController@index')->name('home');
