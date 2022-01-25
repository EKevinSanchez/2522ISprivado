<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portafolio;

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
    return view('index');
})->name('index');

Route::get('/estudios', function () {
    return view('estudios');
})->name('estudios');

Route::get('/proyectos', function () {
    $info = new Portafolio();

    return view('proyectos' , ['info' => $info]);
})->name('proyectos');
