<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SrtdataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SrtreportController;
use App\Http\Controllers\ProductrequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// loginusercontroller 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');

Route::middleware(['isLoggedIn'])->group(function () {

    // UserController
Route::get('/add-user',[UserController::class, 'add_user'])->name('add-user');
Route::post('/save-user',[UserController::class, 'create'])->name('save-user');
Route::get('/view-user',[UserController::class, 'view_user'])->name('view-user');

// loginusercontroller 

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/view-srtdata',[SrtdataController::class, 'view_srt'])->name('view-srt');
Route::get('/update-srtdata/{id}',[SrtdataController::class, 'edit']);
Route::put('/update-srtdata/{id}',[SrtdataController::class, 'update']);
Route::get('/view-srt/{id}',[SrtdataController::class, 'view_full_data']);
Route::get('/dashboard',[SrtdataController::class, 'index'])->name('dashboard');
Route::get('/srt-data/{status}/{phase}',[SrtdataController::class, 'srt_data']);

Route::get('/phasewise-report',[SrtreportController::class, 'phase'])->name('phasewise-report');
Route::get('/districtwise-report',[SrtreportController::class, 'district'])->name('districtwise-report');
Route::get('/vendorwise-report',[SrtreportController::class, 'vendor'])->name('vendorwise-report');

Route::get('/get-districts/{phase}', [SrtdataController::class, 'getDistricts'])->name('get.districts');
Route::get('/get-site_names/{district}', [SrtdataController::class, 'getSites'])->name('get.site_names');
Route::get('/get-site_names', [SrtdataController::class, 'getSites'])->name('get.site_name');

Route::any('/filter', [SrtdataController::class, 'filter'])->name('filter');
Route::any('/refresh', [SrtdataController::class, 'filter'])->name('refresh');
Route::get('/export-srt',[SrtdataController::class,'export_srt'])->name('export-srt');

});

Route::get('/add-request', [ProductrequestController::class, 'index'])->name('add-request');
Route::post('/save-request', [ProductrequestController::class, 'store'])->name('save-request');
Route::get('/view-request',[ProductrequestController::class, 'view'])->name('view-request');

