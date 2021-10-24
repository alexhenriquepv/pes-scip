<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\TipoTarefa;
use App\Models\StatusTarefa;
use App\Models\Projeto;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return response()->json($tarefas);
    }

    public function show($id)
    {
        $tarefa = Tarefa::with([
            'membros:id,nome','lancamentos','projeto:id,nome'
        ])->findOrFail($id);
        return response()->json($tarefa);
    }

    public function store(Request $request)
    {
        $tipoTarefa = TipoTarefa::findOrFail($request->tipo_tarefa_id);
        $statusTarefa = TipoTarefa::findOrFail($request->status_tarefa_id);
        $projeto = Projeto::findOrFail($request->projeto_id);
        $data = $request->except([
            'tipo_tarefa_id','status_tarefa_id','projeto_id','membros'
        ]);
        
        $tarefa = new Tarefa($data);
        $tarefa->tipo()->associate($tipoTarefa);
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

        if ($request->tipo_tarefa_id) {
            $tipoTarefa = TipoTarefa::findOrFail($request->tipo_tarefa_id);
            $tarefa->tipo()->associate($tipoTarefa);
        }

        if ($request->status_tarefa_id) {
            $statusTarefa = StatusTarefa::findOrFail($request->status_tarefa_id);
            $tarefa->status()->associate($statusTarefa);
        }

        $data = $request->except(['tipo_tarefa_id','status_tarefa_id','membros']);
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
