<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;


Route::get("/", [ClienteController::class,'showHome'])->name('home');

Route::get("/formularioCadCliente", [ClienteController::class,'showCadClie'])->name('formularioCadCliente');
Route::post('/formularioCad',[ClienteController::class,'cadClie'])->name('envia-banco-cliente');


Route::get("/formularioCadCliente", [FuncionarioController::class,'showCadClie'])->name('formularioCadCliente');
Route::post('/formularioCad',[FuncionarioController::class,'cadClie'])->name('envia-banco-cliente');
