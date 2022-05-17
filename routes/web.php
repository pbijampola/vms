<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\UserController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::resource('subscribe', SubscribeController::class);
  Route::resource('/',AdminHomeController::class);

  //visitor route
  Route::resource('visitor',VisitorController::class);
  //department route
  Route::resource('department', DepartmentController::class);
  //user route
  Route::resource('user', UserController::class);

});
