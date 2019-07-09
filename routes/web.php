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

Route::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//

Route::post('/register', 'forms@register');

Route::post('/reg', 'donate@donate');

Route::get('/agentregister', 'PageController@index');

Route::get('/tre', 'PageController@money');

Route::get('/agentslist', 'PageController@list');

Route::get('/archy', 'PageController@arch');

Route::get('/donation', 'PageController@don');

Route::get('/enroll', 'PageController@roll');

Route::get('/funding', 'PageController@fun');

Route::get('/members', 'PageController@mem');

Route::get('/moneyregister', 'PageController@mon');

Route::get('/upgrade', 'PageController@up');


