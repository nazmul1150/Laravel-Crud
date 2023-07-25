<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
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

Route::view('/', 'insertRead');
Route::post('/insertData', [Mycontroller::class, 'insert']);
Route::get('/', [Mycontroller::class, 'redData']);
Route::view('/update','updateview');
Route::get('/updateDelete', [Mycontroller::class, 'updateDelete']);
Route::post('/updatedata', [Mycontroller::class, 'updatedata']);
