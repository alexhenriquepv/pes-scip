<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\StatusTarefa;
use App\Models\Projeto;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::with(['status','membros:id,nome'])->get();
        return response()->json($tarefas);
    }

    public function show($id)
    {
        $tarefa = Tarefa::with([
            'membros:id,nome','projeto:id,nome','antecessora:id,titulo'
        ])->findOrFail($id);
        return response()->json($tarefa);
    }

    public function store(Request $request)
    {
        $statusTarefa = StatusTarefa::findOrFail($request->status_tarefa_id);
        $projeto = Projeto::findOrFail($request->projeto_id);

        $data = $request->except(['status_tarefa_id','projeto_id','membros']);
        
        $tarefa = new Tarefa($data);
        $tarefa->status()->associate($statusTarefa);

        $projeto->tarefas()->save($tarefa);

        if ($request->membros) {
            $tarefa->membros()->sync($request->membros);
        }

        $res = array("message" => "ok");
        return response()->json($res);
    }

    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::findOrFail($id);

        if ($request->status_tarefa_id) {
            $statusTarefa = StatusTarefa::findOrFail($request->status_tarefa_id);
            $tarefa->status()->associate($statusTarefa);
        }

        $data = $request->except(['status_tarefa_id','projeto_id','membros']);

        $tarefa->update($data);

        if (isset($request->membros)) {
            $tarefa->membros()->sync($request->membros);
        }

        $res = array("message" => "ok");
        return response()->json($res);
    }

    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
