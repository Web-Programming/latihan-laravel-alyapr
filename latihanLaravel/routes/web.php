<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/mahasiswa/insert", [MahasiswaController::class, 'insert']);
Route::get("/mahasiswa/update", [MahasiswaController::class, 'update2']);
Route::get("/mahasiswa/delete", [MahasiswaController::class, 'delete']);
Route::get("/mahasiswa/select", [MahasiswaController::class, 'select']);

Route::get("/mahasiswa/insertQb", [MahasiswaController::class, 'insertQb']);
Route::get("/mahasiswa/updateQb", [MahasiswaController::class, 'updateQb']);
Route::get("/mahasiswa/deleteQb", [MahasiswaController::class, 'deleteQb']);
Route::get("/mahasiswa/selectQb", [MahasiswaController::class, 'selectQb']);


Route::get("/mahasiswa/insertElq", [MahasiswaController::class, 'insertElq']);
Route::get("/mahasiswa/updateElq", [MahasiswaController::class, 'updateElq']);
Route::get("/mahasiswa/deleteElq", [MahasiswaController::class, 'deleteElq']);
Route::get("/mahasiswa/selectElq", [MahasiswaController::class, 'selectElq']);


Route::get("/mahasiswa/index", [MahasiswaController::class, 'index']);
Route::get('/prodi/all-join-facade', [ProdiController::class, 'allJoinFacade']);
Route::get('/prodi/all-join-elq', [ProdiController::class, 'allJoinElq']);
Route::get('/mahasiswa/all-join-elq', [MahasiswaController::class, 'allJoinElq']);

//RETRIVE PRODI
Route::get('/prodi', [ProdiController::class,'index'])
    ->name('prodi.index'); //list
//CREATE PRODI
Route::get('/prodi/create', [ProdiController::class, 'create'])
    ->name('prodi.create');
Route::post("/prodi/store", [ProdiController::class, "store"])
    ->name('prodi.store');
//RETRIVE PRODI
Route::get('/prodi/{id}', [ProdiController::class,'show'])
    ->name('prodi.show'); //single

Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])
    ->name('prodi.edit');
Route::patch('/prodi/{prodi}', [ProdiController::class, 'update'])
    ->name('prodi.update');
Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy'])
    ->name('prodi.destroy');