<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lancamento;
use App\Models\Tarefa;

class LancamentoController extends Controller
{
    public function index()
    {
        $lancamentos = Lancamento::all();
        return response()->json($lancamentos);
    }

    public function store(Request $request)
    {
    	$tarefa = Tarefa::findOrFail($request->tarefa_id);
        $data = $request->except(['tarefa_id']);
        $tarefa->lancamentos()->create($data);
        $res = array("message" => "ok");
        return response()->json($res);
    }

    public function show($id)
    {
        $lancamento = Lancamento::with(['tarefa:id,titulo','usuario:id,nome'])->findOrFail($id);
        return response()->json($lancamento);
    }

    public function destroy($id)
    {
        $lancamento = Lancamento::findOrFail($id);
        $lancamento->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
