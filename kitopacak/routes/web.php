<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Login', function(){
    return view('Login');
});

Route::get("Home",[PageController::class, "Home"]);
Route::get("About",[PageController::class, "About"]);
Route::get("Contact",[PageController::class, "Contact"]);
Route::get("Register",[AuthController::class, "Register"]);            
Route::get("Login",[AuthController::class, "Login"]);