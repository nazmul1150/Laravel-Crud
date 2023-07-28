<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/stordata', [StudentController::class, 'stordata']);
Route::get('/editShowData/{id}', [StudentController::class, 'editShowData']);
Route::get('/editData/{id}', [StudentController::class, 'editData']);
Route::post('/updateData/{id}', [StudentController::class, 'updateData']);
Route::get('/deleteData/{id}', [StudentController::class, 'deleteData']);


