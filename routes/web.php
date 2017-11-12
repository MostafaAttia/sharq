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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {

    // Owner Routes
    Route::group(['prefix' => 'super', 'middleware' => ['role:owner']], function() {

//        Route::get('/', 'DashboardController@showAdminDashboard')->name('admin.dash');

    });


    Route::get('/', 'DashboardController@index')->name('admin.showDash');
    Route::get('/requests', 'DashboardController@showClientsJoinRequests')->name('admin.showJoinRequest');
    Route::get('/clients', 'DashboardController@showAllClients')->name('clients.showAll');







});







Route::get('/register', 'Auth\UserController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\UserController@register')->name('registerUser');

Route::get('/register/admin', 'Auth\AdminController@showRegistrationForm')->name('registerAdmin');
Route::post('/register/admin', 'Auth\AdminController@register')->name('registerAdmin');

Route::get('/register/owner', 'Auth\OwnerController@showRegistrationForm')->name('registerOwner');
Route::post('/register/owner', 'Auth\OwnerController@register')->name('registerOwner');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');



