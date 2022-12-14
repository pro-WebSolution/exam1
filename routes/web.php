<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\FrontController;

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
Route::get('member/',[CatController::class,'show'] );
Route::post('add_cat/',[CatController::class,'insert'] );
Route::get('show_edit/{cat_id}',[CatController::class,'showEdit'] );
Route::post('update/',[CatController::class,'update'] );
Route::get('delete/{cat_id}',[CatController::class,'delete'] );
Route::get('/',[FrontController::class,'homepage'] );