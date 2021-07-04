<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Mail\ResetPasswordNotification;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/send-mail', function () {
    Mail::to('newuser@example.com')->send(new ResetPasswordNotification());
    return 'A message has been sent to Mailtrap!';
 });

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function() {

    Route::get('/', function(){ return redirect()->route('admin.login'); });

    Route::get('/login', [AdminLoginController::class, 'showLoginForm']);
    Route::post('/login/submit',[AdminLoginController::class, 'login'])->name('admin.login.submit');

    Route::get('password/reset', [ForgotPasswordController::class,'getEmail'])->name('admin.password.reset');
    Route::post('password/email', [ForgotPasswordController::class,'postEmail'])->name('admin.password.email');
    Route::get('password/reset/{token}', [ForgotPasswordController::class,'getPassword'])->name('admin.password.reset.token');
    Route::post('password/reset',  [ForgotPasswordController::class,'updatePassword'])->name('admin.passowrd.update');

});

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('admin/home', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.home');
    Route::resource('admin/users', UserController::class,[
        'as' => 'admin'
    ]);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth:web']], function () {

});

