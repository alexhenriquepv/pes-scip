<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\LancamentoController;

Route::resource('perfis', PerfilController::class)->except(['create', 'edit']);
Route::resource('usuarios', UsuarioController::class)->except(['create', 'edit']);
Route::resource('clientes', ClienteController::class)->except(['create', 'edit']);
Route::resource('projetos', ProjetoController::class)->except(['create', 'edit']);
Route::resource('tarefas', TarefaController::class)->except(['create', 'edit']);
Route::resource('lancamentos', LancamentoController::class)->except(['create','edit','update']);