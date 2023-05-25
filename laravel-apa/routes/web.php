<?php


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\dashbordrController;
use App\Http\Controllers\PetugasOrAdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',[UserController::class, 'index']);
Route::post('user/create',[UserController::class, 'create']);
Route::post('user/login',[UserController::class, 'login']);
Route::get('/user/logout',[UserController::class, 'logout']);
Route::get('petugas-admin',[PetugasOrAdminController::class, 'index']);
Route::get('petugas-admin/logout',[PetugasOrAdminController::class, 'logout']);
Route::post('petugas-admin/login',[PetugasOrAdminController::class, 'login']);


Route::resource('home', dashbordrController::class);
Route::resource('dashbord', AdminController::class);
Route::resource('rating', RatingController::class);

