<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
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

//Route::get('/',function (){
//    return view('home.index');
//})->name('home');

Route::get("/",[HomeController::class,'index'])->name('home.index');
Route::get("/contact",[HomeController::class,'contact'])->name('home_contact');
Route::post("/contact/create",[\App\Http\Controllers\MessageController::class,'store'])->name('contact_store');

Route::get("/about",[HomeController::class,'about'])->name('home_about');
Route::get("/faq",[App\Http\Controllers\HomeController::class,'faq'])->name('home_faq');
Route::get("/cars",[HomeController::class,'cars'])->name('home_cars');
Route::get("/cars/{slug}",[HomeController::class,'carType'])->name('home_carType');
Route::get("/carDetail/{slug}",[HomeController::class,'carDetail'])->name('home_carDetail');

Route::prefix('user')->group(function (){
    Route::get("/",[App\Http\Controllers\HomeController::class,'index'])->name('home_login')->middleware('auth');
    Route::get("/login",[App\Http\Controllers\HomeController::class,'login'])->name('home_login');
    Route::post("/logincheck",[App\Http\Controllers\HomeController::class,'logincheck'])->name('user_logincheck');
    Route::get("/logout",[App\Http\Controllers\HomeController::class,'logout'])->name('user_logout');

    Route::get("/register",[App\Http\Controllers\HomeController::class,'register'])->name('home_register');
    Route::post("/registercheck",[App\Http\Controllers\HomeController::class,'registercheck'])->name('user_registercheck');
    Route::post("/basket",[App\Http\Controllers\ReservationController::class,'create'])->name('user_basket');

    Route::get("/profile",[App\Http\Controllers\UserController::class,'index'])->name('user_profile');
    Route::get("/profile/reservation",[App\Http\Controllers\UserController::class,'reservation'])->name('user_reservation');

    Route::get("/profile/comments",[App\Http\Controllers\CommentsController::class,'show'])            ->name('user_comments');



});

Route::post("/comment",[App\Http\Controllers\CommentsController::class,'create'])->name('user_comment');



Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get("reservations",[App\Http\Controllers\ReservationController::class,'showAdmin'])     ->name('admin_reservations');
    Route::get("reservations/edit/{id}",[App\Http\Controllers\ReservationController::class,'edit'])->name('admin_reservations_edit');

    Route::get("comments",[App\Http\Controllers\CommentsController::class,'showAdmin'])            ->name('admin_comments');
    Route::get("comments/edit/{id}",[App\Http\Controllers\CommentsController::class,'edit'])       ->name('admin_comments_edit');

    Route::get("faq",[App\Http\Controllers\Admin\FaqController::class,'index'])                    ->name('admin_faq');
    Route::get("faq/store",[App\Http\Controllers\Admin\FaqController::class,'store'])              ->name('admin_faq_store');
    Route::post("faq/create",[App\Http\Controllers\Admin\FaqController::class,'create'])           ->name('admin_faq_create');
    Route::post("faq/update/{id}",[App\Http\Controllers\Admin\FaqController::class,'update'])      ->name('admin_faq_update');
    Route::get("faq/edit/{id}",[App\Http\Controllers\Admin\FaqController::class,'edit'])           ->name('admin_faq_edit');
    Route::get("faq/delete/{id}",[App\Http\Controllers\Admin\FaqController::class,'destroy'])      ->name('admin_faq_delete');

    Route::get("message",[App\Http\Controllers\MessageController::class,'show'])               ->name('admin_message');
    Route::get("message/delete/{id}",[App\Http\Controllers\MessageController::class,'destroy'])       ->name('admin_message_delete');
    Route::get("message/edit/{id}",[App\Http\Controllers\MessageController::class,'edit'])       ->name('admin_message_edit');
    Route::post("message/update/{id}",[App\Http\Controllers\MessageController::class,'update'])       ->name('admin_message_update');


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

Route::prefix('admin')->group(function (){
    Route::get("/",[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');
    Route::get("/login",[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
    Route::post("/logincheck",[App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get("/logout",[App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

    Route::get("/register",[App\Http\Controllers\Admin\HomeController::class,'register'])->name('admin_register');
    Route::post("/registercheck",[App\Http\Controllers\Admin\HomeController::class,'registercheck'])->name('admin_registercheck');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




