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

use App\Http\Controllers\whatsappController;

Route::get('/', function () {
    return view('login');
});


Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'Dashboardcontroller@index');
    });

    Route::group(['prefix' => 'km'], function () {
        Route::get('/', function(){ return view('kesejahteraanMasyarakat.km');});
        Route::get('/data', 'kmController@data');
        Route::post('/create', 'kmController@create');
        Route::post('/update/{id}', 'kmController@update');
        Route::get('/delete/{id}', 'kmController@delete');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
