<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[CompController::class,'index']);
Route::get('company/tambah',[CompController::class,'tambah']);
Route::post('company/store',[CompController::class,'store']);
Route::get('company/edit/{id}',[CompController::class,'edit']);
Route::post('company/update',[CompController::class,'update']);
Route::get('company/hapus/{id}',[CompController::class,'hapus']);
