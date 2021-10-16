<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\TipoTarefa;
use App\Models\StatusTarefa;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return response()->json($tarefas);
    }

    public function store(Request $request)
    {
        $tipoTarefa = TipoTarefa::findOrFail($request->tipo_tarefa_id);
        $statusTarefa = TipoTarefa::findOrFail($request->status_tarefa_id);
        $data = $request->except(['tipo_tarefa_id','status_tarefa_id']);
        
        $tarefa = Tarefa::create($data);
        $tarefa->tipo()->associate($tipoTarefa);
        $tarefa->status()->associate($statusTarefa);
        $tarefa->save($data);

        $res = array("message" => "ok");
        return response()->json($res);
    }

    public function show($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return response()->json($tarefa);
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

        $data = $request->except(['tipo_tarefa_id','status_tarefa_id']);
        $tarefa->update($data);

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
