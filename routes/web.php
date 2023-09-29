<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAI;
use App\Http\Controllers\InputDados;

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

Route::get('/', function () {return view('inputDados');
});

Route::get('/chamadaApi', [ControllerAI::class, 'chamadaApi'])->name('chamada-api');
Route::post('/chamadaApi', [ControllerAI::class, 'chamadaApi'])->name('chamada-api');
Route::get('/inputDados', [InputDados::class, 'input'])->name('input');
// Route::post('/chamada-api', 'ControllerAI@chamadaApi')->name('chamada-api');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

