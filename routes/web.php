<?php
use App\Http\Controllers\fichier1controller;

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

Route::get('/test1',[fichier1controller::class, 'method1'] );

route::get('/test',[fichier1controller::class, 'method2']);

route::get('/acceuil', [fichier1controller::class, 'acceuil']);







