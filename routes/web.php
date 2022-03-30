<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restocontroller;

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

Route::get("/",[restocontroller::class,'index']);
//Route::get('/','restocontroller@index');
Route::get("list",[restocontroller::class,'list']);
Route::view('add','add');
Route::post('add',[restocontroller::class,'add']);
Route::view('mas','master');
Route::get('delete/{id}',[restocontroller::class,'delete']);
Route::get('edit/{id}',[restocontroller::class,'edit']);

Route::post('/update',[restocontroller::class,'update']);
Route::view('register','register');
Route::post('register',[restocontroller::class,'register']);
Route::view("login","login");
Route::post('login',[restocontroller::class,'login']);


