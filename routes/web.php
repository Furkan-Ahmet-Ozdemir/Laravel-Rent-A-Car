<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',function (){
    return view('home.index');
});

Route::get("/home",[HomeController::class,'home']);
Route::get("/test/{id}",[HomeController::class,'test'])->where('id','[0-10]+');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get("category",[App\Http\Controllers\Admin\CategoryController::class,'index'])               ->name('admin_category');
    Route::get("category/add",[App\Http\Controllers\Admin\CategoryController::class,'add'])             ->name('admin_category_add');
    Route::post("category/create",[App\Http\Controllers\Admin\CategoryController::class,'create'])      ->name('admin_category_create');
    Route::post("category/update/{id}",[App\Http\Controllers\Admin\CategoryController::class,'update']) ->name('admin_category_update');
    Route::get("category/edit/{id}",[App\Http\Controllers\Admin\CategoryController::class,'edit'])      ->name('admin_category_edit');
    Route::get("category/delete/{id}",[App\Http\Controllers\Admin\CategoryController::class,'destroy']) ->name('admin_category_delete');
    Route::get("category/show",[App\Http\Controllers\Admin\CategoryController::class,'show'])           ->name('admin_category_show');

    Route::prefix('car')->group(function (){
        Route::get("",[App\Http\Controllers\Admin\CarController::class,'index'])->name('admin_cars');
        Route::get("create",[App\Http\Controllers\Admin\CarController::class,'create'])->name('admin_car_add');
        Route::post("store",[App\Http\Controllers\Admin\CarController::class,'store'])->name('admin_car_create');
        Route::get("show",[App\Http\Controllers\Admin\CarController::class,'show'])->name('admin_car_show');
        Route::get("edit/{id}",[App\Http\Controllers\Admin\CarController::class,'edit'])->name('admin_car_edit');
        Route::post("update/{id}",[App\Http\Controllers\Admin\CarController::class,'update'])->name('admin_car_update');
        Route::get("delete/{id}",[App\Http\Controllers\Admin\CarController::class,'destroy'])->name('admin_car_delete');
    });

    Route::prefix('image')->group(function (){
        Route::get("create/{car_id}",[App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post("store/{car_id}",[App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get("delete/{id}/{car_id}",[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get("show",[App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });
    Route::get("setting",[App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post("setting/update",[App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');


});

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get("/",[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get("/login",[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
    Route::post("/logincheck",[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get("/logout",[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




