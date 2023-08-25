<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LenderController;
use App\Http\Controllers\LoanController;


use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('user.loginpage');
});

Route::get('/register', function () {
    return view('user.registerpage');
});

Route::get('/lender/login', function () {
    return view('lender.loginpage');
});

Route::get('/lender/register', function () {
    return view('lender.registerpage');
});


Route::get('home',[LoanController::class,'index']);


Route::get('/create/loan', function () {
    return view('user.createlending');
});

Route::post('login/process',[UserController::class,'process']);
Route::post('user/store',[UserController::class,'store']);
Route::post('logout',[UserController::class,'logout']);

Route::post('/store/loan',[LoanController::class,'store']);
Route::post('/store/loan',[LoanController::class,'store']);
    




Route::post('lender/process',[LenderController::class,'process']);
Route::post('lender/store',[LenderController::class,'store']);




Route::get('/', function () {
    return view('welcome');
});