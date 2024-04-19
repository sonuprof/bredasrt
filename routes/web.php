<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SrtdataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SrtreportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductrequestController;
use App\Http\Controllers\DispatchproductController;
use App\Http\Controllers\SiteSurveyController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\JammuController;
use App\Http\Controllers\MaterialStatusController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\JammuSrtController;
use App\Http\Controllers\CKusumController;
use App\Http\Controllers\BKusumController;

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
// BKusumController

Route::get('/view-kusum-B',[BKusumController::class, 'view_kusum_b'])->name('view-kusum-B');
Route::get('/edit-kusum-B/{id}', [BKusumController::class, 'edit'])->name('edit-kusum-B');
Route::post('/update-kusum-B', [BKusumController::class, 'update_Kusum_b'])->name('update-kusum-B');

 // CKusumController

Route::get('/add-kusum-C',[CKusumController::class, 'index'])->name('add-kusum-C');
Route::post('/save-kusum-C',[CKusumController::class, 'create'])->name('save-kusum-C');
Route::get('/view-kusum-C',[CKusumController::class, 'view_kusum_C'])->name('view-kusum-C');
Route::get('/edit-kusum-C/{id}', [CKusumController::class, 'edit'])->name('edit-kusum-C');
Route::post('/update-kusum-C', [CKusumController::class, 'update_CKusum'])->name('update-kusum-C');
Route::get('/get-ckusum-modules', [CKusumController::class, 'getModules'])->name('get-ckusum-modules');



// loginusercontroller 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');

Route::middleware(['isLoggedIn'])->group(function () {
Route::get('/state', [LoginController::class, 'state'])->name('state');
Route::get('/{state}/solartype', [LoginController::class, 'solartype'])->name('solartype');

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
Route::get('/ssl-dashboard',[SrtdataController::class, 'indexssl'])->name('ssl-dashboard');
Route::get('/srt-data/{status}/{phase}',[SrtdataController::class, 'srt_data']);  
Route::get('/phase-srt-data/{status}/{phase}',[SrtdataController::class, 'phase_srt_data']);
Route::get('/district-srt-data/{status}/{district}',[SrtdataController::class, 'district_srt_data']);
Route::get('/vendor-srt-data/{status}/{vendor}',[SrtdataController::class, 'vendor_srt_data']); 
Route::get('/main-srt-data/{status}',[SrtdataController::class, 'main_srt_data']);  
Route::get('/phasewise-report',[SrtreportController::class, 'phase'])->name('phasewise-report');
Route::get('/districtwise-report',[SrtreportController::class, 'district'])->name('districtwise-report');
Route::get('/vendorwise-report',[SrtreportController::class, 'vendor'])->name('vendorwise-report');

Route::get('/get-districts/{phase}', [SrtdataController::class, 'getDistricts'])->name('get.districts');
Route::get('/get-site_names/{district}', [SrtdataController::class, 'getSites'])->name('get.site_names');
Route::get('/get-site_names', [SrtdataController::class, 'getSites'])->name('get.site_name');

Route::any('/filter', [SrtdataController::class, 'filter'])->name('filter');
Route::any('/refresh', [SrtdataController::class, 'filter'])->name('refresh');
Route::get('/export-srt',[SrtdataController::class,'export_srt'])->name('export-srt');

Route::get('/view-product', [ProductController::class, 'index'])->name('view-product');

Route::get('/add-request', [ProductrequestController::class, 'index'])->name('add-request');
Route::post('/save-request', [ProductrequestController::class, 'store'])->name('save-request');
Route::get('/view-request',[ProductrequestController::class, 'view'])->name('view-request');
Route::post('/action-request',[ProductrequestController::class, 'accept_request'])->name('action-request');


// DispatchproductController
Route::get('/dispatch/add-dispatch-products', [DispatchproductController::class, 'add_dispatch_product'])->name('add-product-dispatch');
Route::post('/dispatch/save-dispatch-products', [DispatchproductController::class, 'store_product'])->name('save-dispatch-product');
Route::get('/dispatch/view-dispatch-product',[DispatchproductController::class, 'view'])->name('view-product-dispatch');
Route::get('/dispatch/view-inhouse-dispatch',[DispatchproductController::class, 'view_inhouse'])->name('view-inhouse-dispatch');
Route::post('/accept-order',[DispatchproductController::class, 'accept_order'])->name('accept-order');
Route::get('/get-products/{warehouse}', [DispatchproductController::class, 'getProducts'])->name('get-products');
Route::get('/dispatch/inhouse-dispatch-products', [DispatchproductController::class, 'inhouse_dispatch_product'])->name('inhouse-product-dispatch');
Route::post('/outer-dispatch',[DispatchproductController::class, 'outer_dispatch'])->name('outer-dispatch');

// ComplaintController 
Route::get('/add-complaint', [ComplaintController::class, 'add_complaint'])->name('add-complaint');
Route::post('/save-complaint', [ComplaintController::class, 'create'])->name('save-complaint');
Route::get('/view-complaint', [ComplaintController::class, 'view_complaint'])->name('view-complaint');
Route::get('/close/{id}', [ComplaintController::class, 'edit'])->name('close');
Route::post('/update-complaint', [ComplaintController::class, 'update'])->name('update-complaint');
Route::get('/approve/{id}', [ComplaintController::class, 'approve'])->name('approve');
Route::post('/approve-closing', [ComplaintController::class, 'approve_update'])->name('approve-closing');
Route::get('/final-approve/{id}', [ComplaintController::class, 'final_approve'])->name('final-approve');
Route::post('/final-update', [ComplaintController::class, 'final_approve_update'])->name('final-update');

// Start CallController
Route::get('/kusum/dashboard', [CallController::class, 'index_kusum'])->name('kusum-dashboard');
Route::get('/kusum/view-product', [ProductController::class, 'index_kusum'])->name('view-kusum-product');
Route::get('/kusum/add-request', [ProductrequestController::class, 'index_kusum'])->name('add-kusum-request');
Route::get('/kusum/view-request',[ProductrequestController::class, 'view_kusum'])->name('view-kusum-request');


// DispatchproductController
Route::get('/kusum/dispatch/add-dispatch-products', [DispatchproductController::class, 'add_dispatch_product_kusum'])->name('add-kusum-product-dispatch');
Route::get('/kusum/dispatch/view-dispatch-product',[DispatchproductController::class, 'view_kusum'])->name('view-kusum-product-dispatch');
Route::get('/kusum/dispatch/view-inhouse-dispatch',[DispatchproductController::class, 'view_inhouse_kusum'])->name('view-kusum-inhouse-dispatch');
Route::get('/kusum/dispatch/inhouse-dispatch-products', [DispatchproductController::class, 'inhouse_dispatch_product_kusum'])->name('inhouse-kusum-product-dispatch');

Route::get('/view-farmer', [FarmerController::class, 'view_farmer'])->name('view-farmer');
Route::post('/import-farmer', [FarmerController::class, 'farmerImport'])->name('import-farmer');

// SiteSurveyController
Route::get('/add-site-survey', [SiteSurveyController::class, 'index'])->name('add-site-survey');
Route::post('/save-site-survey', [SiteSurveyController::class, 'create'])->name('save-site-survey');
Route::get('/edit/{id}', [SiteSurveyController::class, 'edit'])->name('edit');
Route::post('/update-site-survey', [SiteSurveyController::class, 'update'])->name('update-site-survey');
Route::get('/delete/{id}', [SiteSurveyController::class, 'destroy'])->name('delete');
Route::get('/view-site-survey', [SiteSurveyController::class, 'view_site'])->name('view-site-survey');
Route::post('/import-site-survey', [SiteSurveyController::class, 'siteImport'])->name('import-site-survey');



//JammuController
Route::get('/add-jk-registration', [JammuController::class, 'index'])->name('add-jk-registration');
Route::post('/save-jk-registration', [JammuController::class, 'create'])->name('save-jk-registration');
Route::get('/jk/vendors', [JammuController::class, 'getVendorDetails'])->name('vendors');
Route::get('/view-jk-registration', [JammuController::class, 'view_jk'])->name('view-jk-registration');
Route::get('/get-modules', [JammuController::class, 'getModules'])->name('get-modules');
Route::get('/edit-jk/{id}', [JammuController::class, 'edit'])->name('edit-jk');
Route::post('/update-jk', [JammuController::class, 'update_jk'])->name('update-jk');
Route::get('/delete-jk/{id}', [JammuController::class, 'destroy'])->name('delete-jk');
Route::get('/print/{id}', [JammuController::class, 'print'])->name('print');


//JammuController
Route::get('/add-material', [MaterialStatusController::class, 'index'])->name('add-material');
Route::post('/save-material', [MaterialStatusController::class, 'create'])->name('save-material');
Route::get('/view-material', [MaterialStatusController::class, 'view_material'])->name('view-material');
Route::get('/edit-material/{id}', [MaterialStatusController::class, 'edit'])->name('edit-material');
Route::post('/update-material', [MaterialStatusController::class, 'update_material'])->name('update-material');
Route::get('/delete-material/{id}', [MaterialStatusController::class, 'destroy'])->name('delete-material');


//JammuSrtController
Route::get('/add-jammu-srt', [JammuSrtController::class, 'index'])->name('add-jammu-srt');
Route::post('/save-jammu-srt', [JammuSrtController::class, 'create'])->name('save-jammu-srt');

Route::get('/view-jammu-srt', [JammuSrtController::class, 'view_jammu_srt'])->name('view-jammu-srt');

Route::get('/edit-jammu-srt/{id}', [JammuSrtController::class, 'edit'])->name('edit-jammu-srt');
Route::post('/update-jammu-srt', [JammuSrtController::class, 'update_jammu_srt'])->name('update-jammu-srt');
Route::get('/delete-jammu-srt/{id}', [JammuSrtController::class, 'destroy'])->name('delete-jammu-srt');





});

