<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',function(){
    return view('auth.login');
});

Route::resource('artefactos','App\Http\Controllers\ArtefactoController');
Route::resource('guias','App\Http\Controllers\GuiaController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

/*Route::get('/dashboard/guias',function(){
    return view('guias.index');
});

Route::get('/dashboard/artefactos',function(){
    return view('artefactos.index');
});*/