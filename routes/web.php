<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuUtamaController;
use App\Http\Controllers\LaporanBulananController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(MenuUtamaController::class)->group(function(){
    Route::get('/','index');
});

Route::controller(LaporanBulananController::class)->group(function(){
    Route::get('/laporanBulanan','index');
});
