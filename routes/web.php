<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Models\Movie;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::post('/admin/check',[AdminController::class, 'checkLogin'])->name('admin.checkLogin');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::group(['middleware' => ['authCheck']], function(){
    Route::get('admin/user', [AdminController::class, 'user'])->name('admin.user');
    Route::get('admin/movie', [AdminController::class, 'movie'])->name('admin.movie');
    Route::get('admin', [AdminController::class, 'index'])->name('admin'); 
});
Route::get('/home', [MovieController::class,'index'])->name('home');
Route::get('/', [MovieController::class,'index'])->name('home');
Route::get('/home/action', [MovieController::class, 'action'])->name('home.action');
Route::get('/home/school', [MovieController::class, 'school'])->name('home.school');
Route::get('/home/sad', [MovieController::class, 'sad'])->name('home.sad');
Route::get('/home/honnor', [MovieController::class, 'honnor'])->name('home.honnor');
Route::get('/home/fiction', [MovieController::class, 'fiction'])->name('home.fiction');
//admin
Route::get('admin/movie/action', [AdminController::class, 'action'])->name('admin.movie1');
Route::get('admin/movie/school', [AdminController::class, 'school'])->name('admin.movie2');
Route::get('admin/movie/sad', [AdminController::class, 'sad'])->name('admin.movie3');
Route::get('admin/movie/honnor', [AdminController::class, 'honnor'])->name('admin.movie4');
Route::get('admin/movie/fiction', [AdminController::class, 'fiction'])->name('admin.movie5');
Route::get('admin/addnew', [AdminController::class, 'addnew'])->name('admin.addnew');
Route::post('admin/addnew', [AdminController::class,'addnew'])->name('admin.addnew');