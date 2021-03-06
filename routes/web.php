<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Indexcontroller;

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


Route::get('/',[Indexcontroller::class, "index"])->name('/');
Route::post('/getmodule',[Indexcontroller::class, "getmodule"])->name('/getmodule');
Route::post('/addmodule',[Indexcontroller::class, "addmodule"])->name('/addmodule');