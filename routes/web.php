<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/home',[HomeController::class,'reidrect']);

Route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appoinment',[HomeController::class,'appoinment']);

Route::get('/myappoinment',[HomeController::class,'myappoinment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappoinment',[AdminController::class,'showappoinment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/doctor',[HomeController::class,'doctor']);

Route::get('/news',[HomeController::class,'news']);

Route::get('/contact',[HomeController::class,'contact']);

// Route::get('/botman',[HomeController::class,'handle']);

// Route::post('/botman',[HomeController::class,'handle']);

Route::match(['get', 'post'], '/botman', 'HomeController@handle');