<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PDFController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\InviteeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AttandenceController;
use App\Http\Controllers\Admin\DepartmentController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function () {
    Route::resource('subscribe', SubscribeController::class);
    //Route::resource('/', AdminHomeController::class);
    Route::get('/',[DashboardController::class ,'index']);

    //visitor route
    Route::resource('visitor', VisitorController::class);
    //department route
    Route::resource('department', DepartmentController::class);
    //user route
    Route::resource('user', UserController::class);
    Route::resource('user/profile',ProfileController::class);

    //Employee Route
    Route::resource('employee', EmployeeController::class);
    //Route::get('downloadpdf',[PDFController::class,'downloadPDF'])->name('downloadpf');
    //Getting the attendance of Employees In the Office

    //Invitation Route
    Route::resource('invitee',InviteeController::class);

    //Role Route
    Route::resource('role',RoleController::class);


});
