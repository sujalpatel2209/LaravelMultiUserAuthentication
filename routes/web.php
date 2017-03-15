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

// Route::get('/', function () {
//     return view('welcome');
// });

// Master Login Routes

Route::get('/', 'MasterController@showLoginForm');
Route::get('/masterLogin', 'MasterController@showLoginForm');
Route::post('/login', 'MasterController@login');
Route::get('/masterDashboard', function(){
    return view('masterDashboard');
});
Route::post('/logout', 'MasterController@logout');

Route::get('/showpass','Test@index');