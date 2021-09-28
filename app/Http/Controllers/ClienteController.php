<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return response()->json($cliente);
    }

    function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        $cliente->save();
        $res = array("message" => "ok");
        return response()->json($res);
    }

    function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        $cliente->save();
        $res = array("message" => "ok");
        return response()->json($res);
    }

    function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
