<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Cliente;

class ProjetoController extends Controller
{
    function index()
    {
        $projetos = Projeto::with('membros:id,nome')->get();
        return response()->json($projetos);
    }

    function show($id)
    {
        $projeto = Projeto::with('membros:id,nome')->findOrFail($id);
        return response()->json($projeto);
    }

    function store(Request $request)
    {
        $cliente = Cliente::findOrFail($request->cliente_id);
        $projeto = $cliente->projetos()->create($request->except(['cliente_id', 'membros']));

        if ($request->membros) {
            $projeto->membros()->sync($request->membros);
        }

        $res = array("message" => "ok");
        return response()->json($res);
    }

    function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);

        if (isset($request->membros)) {
            $projeto->membros()->sync($request->membros);
        }

        if ($request->cliente_id) {
            $cliente = Cliente::findOrFail($request->cliente_id);
            $projeto->cliente()->associate($cliente);
        }

        $projeto->update($request->except(['cliente_id', 'membros']));
        $projeto->save();

        $res = array("message" => "ok");
        return response()->json($res);
    }

    function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
