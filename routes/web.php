<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login','App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/user/add', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.user.add');
    Route::post('/user/add', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.user.store');
    Route::get('/user/delete/{id}/{type}', [App\Http\Controllers\AdminController::class, 'userdelete'])->name('admin.user.delete');

    Route::get('/seat/ms_view', [App\Http\Controllers\AdminController::class, 'ms_viewdailyseat'])->name('admin.seat.msview');
    Route::post('/seat/ms_view', [App\Http\Controllers\AdminController::class, 'ms_viewdailyseat'])->name('admin.seat.msview');

    Route::get('/seat/ms2_view', [App\Http\Controllers\AdminController::class, 'ms2_viewdailyseat'])->name('admin.seat.ms2view');
    Route::post('/seat/ms2_view', [App\Http\Controllers\AdminController::class, 'ms2_viewdailyseat'])->name('admin.seat.ms2view');

    Route::get('/seat/sm_view', [App\Http\Controllers\AdminController::class, 'sm_viewdailyseat'])->name('admin.seat.smview');
    Route::post('/seat/sm_view', [App\Http\Controllers\AdminController::class, 'sm_viewdailyseat'])->name('admin.seat.smview');

    Route::get('/seat/sm2_view', [App\Http\Controllers\AdminController::class, 'sm2_viewdailyseat'])->name('admin.seat.sm2view');
    Route::post('/seat/sm2_view', [App\Http\Controllers\AdminController::class, 'sm2_viewdailyseat'])->name('admin.seat.sm2view');

    Route::get('/seat/detail/{id}/{date}/{type}', [App\Http\Controllers\AdminController::class, 'seatdetail'])->name('admin.seat.detail');
    Route::post('/seat/add', [App\Http\Controllers\AdminController::class, 'seatadd'])->name('admin.seat.add');

    Route::get('/customer/view/ms', [App\Http\Controllers\AdminController::class, 'viewdailymscustomer'])->name('admin.customer.msview');
    Route::post('/customer/view/ms', [App\Http\Controllers\AdminController::class, 'viewdailymscustomer'])->name('admin.customer.msview');

    Route::get('/customer/view/sm', [App\Http\Controllers\AdminController::class, 'viewdailysmcustomer'])->name('admin.customer.smview');
    Route::post('/customer/view/sm', [App\Http\Controllers\AdminController::class, 'viewdailysmcustomer'])->name('admin.customer.smview');

    Route::get('/customer/view/ms2', [App\Http\Controllers\AdminController::class, 'viewdailyms2customer'])->name('admin.customer.ms2view');
    Route::post('/customer/view/ms2', [App\Http\Controllers\AdminController::class, 'viewdailyms2customer'])->name('admin.customer.ms2view');

    Route::get('/customer/view/sm2', [App\Http\Controllers\AdminController::class, 'viewdailysm2customer'])->name('admin.customer.sm2view');
    Route::post('/customer/view/sm2', [App\Http\Controllers\AdminController::class, 'viewdailysm2customer'])->name('admin.customer.sm2view');

    Route::get('/customer/detail/{seat_id}/{id}/{date}/{type}', [App\Http\Controllers\AdminController::class, 'customerdetail'])->name('admin.customer.detail');
    Route::post('/customer/delete', [App\Http\Controllers\AdminController::class, 'customerdelete'])->name('admin.customer.delete');

    Route::get('/user/view', [App\Http\Controllers\AdminController::class, 'viewuser']);
    Route::get('/user/detail/{id}/{type}', [App\Http\Controllers\AdminController::class, 'userdetail'])->name('admin.user.detail');

    Route::get('/print/view/ms', [App\Http\Controllers\AdminController::class, 'viewdailymsview'])->name('admin.print.msview');
    Route::post('/print/detail/ms', [App\Http\Controllers\AdminController::class, 'viewdailymsprint'])->name('admin.print.msdetail');


    Route::get('/print/view/ms2', [App\Http\Controllers\AdminController::class, 'viewdailyms2view'])->name('admin.print.ms2view');
    Route::post('/print/detail/ms2', [App\Http\Controllers\AdminController::class, 'viewdailyms2print'])->name('admin.print.ms2view');

    Route::get('/print/view/sm', [App\Http\Controllers\AdminController::class, 'viewdailysmview'])->name('admin.print.smview');
    Route::post('/print/detail/sm', [App\Http\Controllers\AdminController::class, 'viewdailysmprint'])->name('admin.print.smview');

    Route::get('/print/view/sm2', [App\Http\Controllers\AdminController::class, 'viewdailysm2view'])->name('admin.print.sm2view');
    Route::post('/print/detail/sm2', [App\Http\Controllers\AdminController::class, 'viewdailysm2print'])->name('admin.print.sm2view');
});

Route::prefix('staff')->group(function() {
    Route::get('/login','App\Http\Controllers\Auth\StaffLoginController@showLoginForm')->name('staff.login');
    Route::post('/login', 'App\Http\Controllers\Auth\StaffLoginController@login')->name('staff.login.submit');
    Route::get('logout/', 'App\Http\Controllers\Auth\StaffLoginController@logout')->name('staff.logout');
    Route::get('/', [App\Http\Controllers\StaffController::class, 'index'])->name('staff.dashboard');

    Route::get('/seat/ms_view', [App\Http\Controllers\StaffController::class, 'ms_viewdailyseat'])->name('staff.seat.msview');
    Route::post('/seat/ms_view', [App\Http\Controllers\StaffController::class, 'ms_viewdailyseat'])->name('staff.seat.msview');

    Route::get('/seat/ms2_view', [App\Http\Controllers\StaffController::class, 'ms2_viewdailyseat'])->name('staff.seat.ms2view');
    Route::post('/seat/ms2_view', [App\Http\Controllers\StaffController::class, 'ms2_viewdailyseat'])->name('staff.seat.ms2view');

    Route::get('/seat/sm_view', [App\Http\Controllers\StaffController::class, 'sm_viewdailyseat'])->name('staff.seat.smview');
    Route::post('/seat/sm_view', [App\Http\Controllers\StaffController::class, 'sm_viewdailyseat'])->name('staff.seat.smview');

    Route::get('/seat/sm2_view', [App\Http\Controllers\StaffController::class, 'sm2_viewdailyseat'])->name('staff.seat.sm2view');
    Route::post('/seat/sm2_view', [App\Http\Controllers\StaffController::class, 'sm2_viewdailyseat'])->name('staff.seat.sm2view');

    Route::get('/seat/detail/{id}/{date}/{type}', [App\Http\Controllers\StaffController::class, 'seatdetail'])->name('staff.seat.detail');
    Route::post('/seat/add', [App\Http\Controllers\StaffController::class, 'seatadd'])->name('staff.seat.add');

    Route::get('/customer/view/ms', [App\Http\Controllers\StaffController::class, 'viewdailymscustomer'])->name('staff.customer.msview');
    Route::post('/customer/view/ms', [App\Http\Controllers\StaffController::class, 'viewdailymscustomer'])->name('staff.customer.msview');

    Route::get('/customer/view/sm', [App\Http\Controllers\StaffController::class, 'viewdailysmcustomer'])->name('staff.customer.smview');
    Route::post('/customer/view/sm', [App\Http\Controllers\StaffController::class, 'viewdailysmcustomer'])->name('staff.customer.smview');

    Route::get('/customer/view/ms2', [App\Http\Controllers\StaffController::class, 'viewdailyms2customer'])->name('staff.customer.ms2view');
    Route::post('/customer/view/ms2', [App\Http\Controllers\StaffController::class, 'viewdailyms2customer'])->name('staff.customer.ms2view');

    Route::get('/customer/view/sm2', [App\Http\Controllers\StaffController::class, 'viewdailysm2customer'])->name('staff.customer.sm2view');
    Route::post('/customer/view/sm2', [App\Http\Controllers\StaffController::class, 'viewdailysm2customer'])->name('staff.customer.sm2view');

    Route::get('/customer/detail/{seat_id}/{id}/{date}/{type}', [App\Http\Controllers\StaffController::class, 'customerdetail'])->name('staff.customer.detail');
    Route::post('/customer/delete', [App\Http\Controllers\StaffController::class, 'customerdelete'])->name('staff.customer.delete');

    Route::get('/print/view/ms', [App\Http\Controllers\StaffController::class, 'viewdailymsview'])->name('staff.print.msview');
    Route::post('/print/detail/ms', [App\Http\Controllers\StaffController::class, 'viewdailymsprint'])->name('staff.print.msdetail');


    Route::get('/print/view/ms2', [App\Http\Controllers\StaffController::class, 'viewdailyms2view'])->name('staff.print.ms2view');
    Route::post('/print/detail/ms2', [App\Http\Controllers\StaffController::class, 'viewdailyms2print'])->name('staff.print.ms2view');

    Route::get('/print/view/sm', [App\Http\Controllers\StaffController::class, 'viewdailysmview'])->name('staff.print.smview');
    Route::post('/print/detail/sm', [App\Http\Controllers\StaffController::class, 'viewdailysmprint'])->name('staff.print.smview');

    Route::get('/print/view/sm2', [App\Http\Controllers\StaffController::class, 'viewdailysm2view'])->name('staff.print.sm2view');
    Route::post('/print/detail/sm2', [App\Http\Controllers\StaffController::class, 'viewdailysm2print'])->name('staff.print.sm2view');
});
