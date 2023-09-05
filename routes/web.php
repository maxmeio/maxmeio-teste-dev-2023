<?php

use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmControler;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', [HomeControler::class, 'index']);
Route::post('home', [HomeControler::class, 'store']);


Route::get('adm',[AdmControler::class, 'index']);