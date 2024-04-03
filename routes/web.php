<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal_Controller;
use App\Http\Controllers\Sobre_Controller;
use App\Http\Controllers\Contato_Controller;
use App\Http\Controllers\Fornecedores_Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/','App\Http\Controllers\Principal_Controller@Principal');
// Route::get('/sobre','App\Http\Controllers\Sobre_Controller@Sobre');
// Route::get('/contato','App\Http\Controllers\Contato_Controller@Contato');
// Route::get('/fornecedores','App\Http\Controllers\Fornecedores_Controller@Fornecedores');

// Essa é outra forma de criar minhas rotas com seus importes no arquivo web.php
Route::get('/',[Principal_Controller::class, 'Principal'])->name('site.principal');
Route::get('/sobre',[Sobre_Controller::class,'Sobre'])->name('site.sobre');
Route::get('/contato', [Contato_Controller::class, 'Contato'])->name('site.contato');
Route::get('/fornecedores', [Fornecedores_Controller::class, 'Fornecedores'])->name('site.fornecedores');


// A Route Fallback tem como objetivo direcionar o usuario para uma pagina que existe caso o usuario tente acessar uma página que não existe.

Route::fallback(function() {
    echo "A rota acessada não existe. <a href=".route('site.Principal').">clique aqui</a> para ir para página principal.";
});

require __DIR__.'/auth.php';
