<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSistema;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo1', [ControllerSistema::class, 'ejemplo1']);
Route::get('/ejemplo2', [ControllerSistema::class, 'ejemplo2']);

Route::get('/categoria', [ControllerSistema::class, 'categoria']);
Route::post('/guardarNuevaCategoria', [ControllerSistema::class, 'guardarNuevaCategoria']);

Route::get('/producto', [ControllerSistema::class, 'producto']);