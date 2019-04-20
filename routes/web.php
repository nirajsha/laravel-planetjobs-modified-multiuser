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
$real_path = realpath(__DIR__).DIRECTORY_SEPARATOR.'admin_routes'.DIRECTORY_SEPARATOR; 

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/', 'IndexController@index');

/********** Password reset routes *************/
Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');
Route::get('admin/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');

/********** Admin Controller *************/
Route::match(['get', 'post'], '/adminLogin', 'AdminController@login')->name('admin.login');
Route::group(['as'=>'admin.' ,'middleware' => 'auth', 'prefix'=>'admin'], function(){
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/admin/profile/{id}', 'AdminController@profile')->name('profile');
    Route::post('/admin/update/profile/{id}', 'AdminController@updateProfile')->name('update.profile');
    Route::match(['get', 'post'], '/admin/edit/password', 'AdminController@editPassword')->name('edit.password');
    Route::post('/admin/edit/check-password', 'AdminController@chkUserPassword');
});

Route::get('/logout', 'AdminController@logout')->name('admin.logout');
Route::get('/home', 'HomeController@index')->name('home');

/********** Super Admin Controller *************/ 
    Route::get('/login/superadmin', 'Auth\LoginController@showSuperAdminLoginForm');
    Route::get('/register/superadmin', 'Auth\RegisterController@showsuperAdminRegisterForm');
    Route::post('/login/superadmin', 'Auth\LoginController@superAdminLogin');
    Route::post('/register/superadmin', 'Auth\RegisterController@createSuperAdmin');

/********** Employer Controller *************/
    Route::get('/login/employer', 'Auth\LoginController@showEmployerLoginForm');
    Route::get('/register/employer', 'Auth\RegisterController@showEmployerRegisterForm');
    Route::post('/login/employer', 'Auth\LoginController@employerLogin');
    Route::post('/register/employer', 'Auth\RegisterController@createEmployer');

/********** Seeker Controller *************/
    Route::get('/login/seeker', 'Auth\LoginController@showSeekerLoginForm');
    Route::get('/register/seeker', 'Auth\RegisterController@showSeekerRegisterForm');
    Route::post('/login/seeker', 'Auth\LoginController@seekerLogin');
    Route::post('/register/seeker', 'Auth\RegisterController@createSeeker');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/superadmin', 'superadmin');
    Route::view('/employer', 'employer');
    Route::view('/seeker', 'seeker');
 
include_once($real_path .'category.php');
include_once($real_path .'job.php');