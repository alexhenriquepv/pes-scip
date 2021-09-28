<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
{
    function index()
    {
        $perfis = Perfil::all();
        return response()->json($perfis);
    }

    function show($id)
    {
        $perfil = Perfil::findOrFail($id);
        return response()->json($perfil);
    }

    function store(Request $request)
    {
        $perfil = Perfil::create($request->all());
        $perfil->save();
        $res = array("message" => "ok");
        return response()->json($res);
    }

    function update(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->update($request->all());
        $perfil->save();
        $res = array("message" => "ok");
        return response()->json($res);
    }

    function destroy($id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
