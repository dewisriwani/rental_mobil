<?php
namespace App\Http\Controllers;

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

Route::get('/welcome', function () { 
    echo "Selamat datang di laravel";
});
Route::get('/greeting', function (){
    return view('greeting');
});
Route::get('/mobil', function(){
    return view('index');
});

Route::get('/greeting', function (){
    return view('greeting');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/mobil',[MobilController::class, 'index']);
    Route::get('/mobil/create',[MobilController::class, 'create']);
    Route::post('/mobil/store',[MobilController::class, 'store']);
    Route::get('/merk',[MerkController::class, 'index']); 
    Route::get('/merk/create',[MerkController::class, 'create']);
    Route::post('/merk/simpan-data',[MerkController::class, 'store']);

    Route::get('/merk/edit/{id}', [MerkController::class, 'formEdit']);
    route::post('/merk/update/{id}', [MerkController::class, 'update']);
    route::get('/merk/delete/{id}', [MerkController::class, 'delete']);

    route::get('/tipemobil', [TipeMobilController::class,'index']);
    route::get('/tipemobil/create',[TipeMobilController::class,'create']);
    route::post('/tipemobil/simpan-data',[TipeMobilController::class,'store']);
    route::get('/tipemobil/edit/{id}',[TipeMobilController::class,'formEdit']);
    route::post('/tipemobil/update/{id}',[TipeMobilController::class,'update']);
    route::get('/tipemobil/delete/{id}',[TipeMobilController::class,'delete']);
    route::get('/logout',[Auth\LoginController::class, 'logout']);
});

route::get('/login',[Auth\LoginController::class, 'index'])->name('login');
route::post('login/proses',[Auth\LoginController::class, 'login']);
route::get('/register',[Auth\RegisterController::class, 'index']);
route::post('/register/proses',[Auth\RegisterController::class, 'register']);