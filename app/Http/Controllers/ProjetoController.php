<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Cliente;

class ProjetoController extends Controller
{
    function index()
    {
        $projetos = Projeto::all();
        return response()->json($projetos);
    }

    function show($id)
    {
        $projeto = Projeto::findOrFail($id);
        return response()->json($projeto);
    }

    function store(Request $request)
    {
        $cliente = Cliente::findOrFail($request->cliente_id);
        $cliente->projetos()->create($request->except(['cliente_id']));
        $res = array("message" => "ok");
        return response()->json($res);
    }

    function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);

        if ($request->cliente_id) {
            $cliente = Cliente::findOrFail($request->cliente_id);
            $projeto->perfil()->associate($cliente);
        }

        $projeto->update($request->except(['cliente_id']));
        $projeto->save();

        $res = array("message" => "ok");
        return response()->json($request);
    }

    function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
