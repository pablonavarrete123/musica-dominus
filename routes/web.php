<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ContactController;
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

Route::get('locale/{locale}', function ($locale){
    session()->put('locale',$locale);
    return Redirect::back();
});


Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/galerias', function () {
    return view('galerias');
});
Route::get('/escrituras', function () {
    return view('escrituras');
});

Route::get('/prefacio', function () {
    return view('prefacio');
});

Route::get('/introduccion', function () {
    return view('introduccion');
});

Route::get('/significado', function () {
    return view('significado');
});

Route::get('/razones', function () {
    return view('razones');
});

Route::get('/musicotherapie', function () {
    return view('musicotherapie');
});

Route::get('/micamino', function () {
    return view('micamino');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');

Route::get('/donacion', function () {
    return view('donacion');
});