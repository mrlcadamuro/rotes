<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos');
Route::get('/contrato', [ContractController::class, 'index'])->name('contrato');
Route::get('/sobre', [AboutController::class, 'index'])->name('sobre');
Route::get('/cadastro', [AuthController::class, 'registerForm'])->name('cadastro');
Route::post('/cadastro', [AuthController::class, 'register'])->name('cadastro.submit');
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/carrinho', [CartController::class, 'index'])->name('carrinho');
Route::post('/carrinho/adicionar', [CartController::class, 'add'])->name('carrinho.adicionar');
Route::post('/carrinho/remover', [CartController::class, 'remove'])->name('carrinho.remover');

?>
