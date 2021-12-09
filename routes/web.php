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
    Route::get("category",[App\Http\Controllers\Admin\CategoryController::class,'index'])         ->name('admin_category');
    Route::get("category/add",[App\Http\Controllers\Admin\CategoryController::class,'add'])       ->name('admin_category_add');
    Route::get("category/update",[App\Http\Controllers\Admin\CategoryController::class,'update']) ->name('admin_category_update');
    Route::get("category/delete",[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get("category/show",[App\Http\Controllers\Admin\CategoryController::class,'show'])     ->name('admin_category_show');


});


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get("",[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    Route::get("/login",[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
    Route::post("/logincheck",[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get("/logout",[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

});
Route::get("admin/blank",[App\Http\Controllers\Admin\HomeController::class,'blank'])->name('admin_blank');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




