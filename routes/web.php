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

// Master Login Routes 15-03-2017
Route::get('/', 'MasterController@showLoginForm');
Route::get('/master', 'MasterController@showLoginForm');
Route::post('/login', 'MasterController@login');
Route::get('/masterDashboard', function(){
    return view('masterDashboard');
})->middleware('checkMasterLogin');
Route::post('/logout', 'MasterController@logout');

// Admin Login Route 18-03-2017
Route::get('/admin', 'AdminController@showLoginForm');
Route::get('/admin/login', 'AdminController@showLoginForm');
Route::post('/admin/login', 'AdminController@login');
Route::get('/admin/adminDashboard', function(){
    return view('adminDashboard');
})->middleware('checkAdminLogin');
Route::post('/admin/logout', 'AdminController@logout');

// User Login Route 18-03-2017
Route::get('/user', 'UserController@showLoginForm');
Route::get('/user/login', 'UserController@showLoginForm');
Route::post('/user/login', 'UserController@login');
Route::get('/user/userDashboard', function(){
    return view('userDashboard');
})->middleware('checkUserLogin');
Route::post('/user/logout', 'UserController@logout');

Route::get('/showpass','Test@index');
