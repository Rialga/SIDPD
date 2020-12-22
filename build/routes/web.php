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
use App\User;
use Illuminate\Support\Facades\Hash;


// Route::get('/add', function () {

//     return User::create([
//         'name' => 'Admin',
//         'email' => 'a@a.com',
//         'password' => Hash::make('123qweasd'),
//     ]);

//     echo('done');
// });






    Route::group(['prefix' => '/'], function () {
        Route::get('/', 'Dashboardcontroller@index');
    });


    Route::group(['prefix' => 'kud'], function () {

        Route::get('/{id}', 'kudController@index');
        Route::get('/data/{level}/{id}', 'kudController@data');
        Route::post('/create/{level}/{id}', 'kudController@create');
        Route::post('/update/{level}/{id}', 'kudController@update');
        Route::get('/delete/{level}/{id}', 'kudController@delete');
    });


    Route::group(['prefix' => 'keagamaan'], function () {
        Route::get('/{id}', 'keagamaanController@index');
        Route::get('/data/{id}', 'keagamaanController@data');
        Route::post('/create/{id}', 'keagamaanController@create');
        Route::post('/update/{id}', 'keagamaanController@update');
        Route::get('/delete/{id}', 'keagamaanController@delete');

    });


    Route::group(['prefix' => 'km'], function () {
        Route::get('/', function(){ return view('km.km');});
        Route::get('/data', 'kmController@data');
        Route::post('/create', 'kmController@create');
        Route::post('/update/{id}', 'kmController@update');
        Route::get('/delete/{id}', 'kmController@delete');
    });


    Route::group(['prefix' => 'dsd'], function () {
        Route::get('/', function(){ return view('dsd.dsd');});
        Route::get('/data', 'dsdController@data');
        Route::post('/create', 'dsdController@create');
        Route::post('/update/{id}', 'dsdController@update');
        Route::get('/delete/{id}', 'dsdController@delete');
    });

    Route::group(['prefix' => 'pu'], function () {

        Route::get('/{id}', 'puController@index');
        Route::get('/data/{level}/{id}', 'puController@data');
        Route::post('/create/{level}/{id}', 'puController@create');
        Route::post('/update/{level}/{id}', 'puController@update');
        Route::get('/delete/{level}/{id}', 'puController@delete');

    });

    Route::group(['prefix' => 'psd'], function () {
        Route::get('/kp', function(){ return view('psd.kp');});
        Route::get('/kp/data', 'psdController@datakp');
        Route::post('/create', 'psdController@create');
        Route::post('/update/{id}', 'psdController@update');
        Route::get('/delete/{id}', 'psdController@delete');
    });


    Route::group(['prefix' => 'statistik'], function () {
        Route::get('/dataKm', 'StatistikController@dataKm');
        Route::get('/km', function(){ return view('statistik.km');});
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
