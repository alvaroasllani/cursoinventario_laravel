<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ControllerSistema;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo1', [ControllerSistema::class, 'ejemplo1']);
Route::get('/ejemplo2', [ControllerSistema::class, 'ejemplo2']);

Route::get('/categoria', [ControllerSistema::class, 'categoria']);

Route::get('/producto', [ControllerSistema::class, 'producto']);