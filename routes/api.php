<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProjetoController;

Route::resource('perfis', PerfilController::class)->except(['create', 'edit']);
Route::resource('usuarios', UsuarioController::class)->except(['create', 'edit']);
Route::resource('clientes', ClienteController::class)->except(['create', 'edit']);
Route::resource('projetos', ProjetoController::class)->except(['create', 'edit']);
// Route::resource('tarefas', PerfilController::class)->except(['create', 'edit']);
// Route::resource('lancamentos', PerfilController::class)->except(['create', 'edit']);