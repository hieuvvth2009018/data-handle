<?php

use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\layoutController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/data-handle/{id}/path',[DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/{id}/query-string',[DataHandleController::class,'handleQueryString']);
Route::get('/data-handle/form',[DataHandleController::class,'returnForm']);
Route::post('/data-handle/form',[DataHandleController::class,'processForm']);



Route::get('',[LayoutController::class,'masterLayout']);
Route::get('/form',[LayoutController::class,'create']);
Route::get('/list',[LayoutController::class,'list']);
