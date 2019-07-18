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


Route::post('/reg', 'donate@donate');


Route::post('/registeragent', 'forms@register');

Route::post('/looks' , 'search@agents');

Route::post('/looksagenthead', 'search@agenthead');

Route::post('/looking' , 'search@members');

Route::get('/pay', 'PageController@pays');


Route::get('/but','payment@pays');


Route::post('/donate', 'search@donation');

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

Route::get('/high', 'PageController@high');
Route::get('/ahigh', 'PageController@ahigh');
Route::get('/ahead', 'PageController@ahead');
Route::get('/agent', 'PageController@agent');


Route::get('/graph', function () {
    return view('Graphs');
});

