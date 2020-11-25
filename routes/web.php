<?php

use App\Http\Controllers\Crud\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Attributes\Node\Attributes;

// Route::view('/dashboard','dashboard');


Auth::routes();
Route::get('/index',[App\Http\Controllers\DashboardController::class,'index']);
Route::get('/',[App\Http\Controllers\DashboardController::class,'index']);
Route::get('/login',[App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
// huruf M dan m di middleware mempengaruhi efek group
Route::group( ['middleware' => 'auth'], function(){
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'dashboard']);
    Route::get('/fo',[App\Http\Controllers\DashboardController::class,'fo']);
    Route::get('/radio',[App\Http\Controllers\DashboardController::class,'radio']);
    Route::get('/server',[App\Http\Controllers\DashboardController::class,'server']);
    Route::get('/setting',[App\Http\Controllers\DashboardController::class,'setting']);
    Route::get('/foadd',[App\Http\Controllers\FoController::class,'create']);
    Route::get('/radioadd',[App\Http\Controllers\RadioController::class,'create']);
    Route::get('/serveradd',[App\Http\Controllers\VmController::class,'create']);

    Route::post('/fosimpan',[App\Http\Controllers\FoController::class,'store'])->name('fosimpan');
    Route::post('/radiosimpan',[App\Http\Controllers\RadioController::class,'store'])->name('radiosimpan');
    Route::post('/vmsimpan',[App\Http\Controllers\VmController::class,'store'])->name('vmsimpan');

    Route::get('/foedit/{id}',[App\Http\Controllers\FoController::class,'edit'])->name('foedit');
    Route::post('/foupdate/{id}',[App\Http\Controllers\FoController::class,'update'])->name('foupdate');
    Route::get('/fodelete/{id}',[App\Http\Controllers\FoController::class,'destroy'])->name('fodelete');

    Route::get('/radioedit/{id}',[App\Http\Controllers\RadioController::class,'edit'])->name('radioedit');
    Route::post('/radioupdate/{id}',[App\Http\Controllers\RadioController::class,'update'])->name('radioupdate');
    Route::get('/radiodelete/{id}',[App\Http\Controllers\RadioController::class,'destroy'])->name('radiodelete');

    Route::get('/serveredit/{id}',[App\Http\Controllers\VmController::class,'edit'])->name('serveredit');
    Route::post('/serverupdate/{id}',[App\Http\Controllers\VmController::class,'update'])->name('serverupdate');
    Route::get('/serverdelete/{id}',[App\Http\Controllers\VmController::class,'destroy'])->name('serverdelete');
});
