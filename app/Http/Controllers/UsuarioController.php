<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Perfil;

class UsuarioController extends Controller
{
    function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    function store(Request $request)
    {
        $perfil = Perfil::findOrFail($request->perfil_id);
        $perfil->usuarios()->create($request->except(['perfil_id']));
        $res = array("message" => "ok");
        return response()->json($res);
    }

    function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        if ($request->perfil_id) {
            $perfil = Perfil::findOrFail($request->perfil_id);
            $usuario->perfil()->associate($perfil);
        }

        $usuario->update($request->except(['perfil_id']));
        $usuario->save();

        $res = array("message" => "ok");
        return response()->json($request);
    }

    function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        $res = array("message" => "ok");
        return response()->json($res);
    }
}
