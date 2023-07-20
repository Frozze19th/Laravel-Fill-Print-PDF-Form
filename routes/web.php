<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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
//views
Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/adduser', function () {
    return view('adduser');
})->name('tambahpengawasform')->middleware('auth');
Route::get('/daftaruser', function () {
    return view('daftaruser');
})->name('daftarpengawas')->middleware('auth');

//backend route
    //login&logout
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/loginproc', [LoginController::class, 'loginproc'])->name('loginproses');
Route::get('/logoutproc', [LoginController::class, 'logoutproc'])->name('logoutproses')->middleware('auth');
    //User
Route::get('/daftaruser', [UserController::class,'showuser'])->name('daftarpengawas')->middleware('auth');
Route::post('/adduserproses',[UserController::class,'adduserproses'])->name('tambahpengawas')->middleware('auth');
Route::get('/edituser/{nip_user}',[UserController::class,'edituser'])->name('editpengawas')->middleware('auth');
Route::post('/updateuserproc',[UserController::class,'updateuserproc'])->name('updatepengawas')->middleware('auth');
Route::get('/deleteuser/{nip_user}',[UserController::class,'deleteuser'])->name('hapuspengawas')->middleware('auth');
    //
