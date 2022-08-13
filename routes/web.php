<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DepotController;

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


Route::get('/', function () {
    return view('template.template');
});

Route::get('users',[TestController::class,'create'])->name('create');
Route::post('users',[TestController::class,'store'])->name('store');

Route::get('projets',[ProjectController::class,'show'])->name('show');

Route::get('depot',[DepotController::class,'create1'])->name('create1');
Route::post('depot',[ProjectController::class,'show'])->name('store1');


