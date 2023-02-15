<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index()
    {
        $lista_torneo = Torneo::all();
        return response()->json($lista_torneo, 200);
    }

    public function store(Request $request)
    {
        // validar
        $request->validate([
            'nombre' => 'required|min:3|max:50|unique:torneos',
        ]);

        try {
            $torneo = new Torneo();
            $torneo->nombre = $request->nombre;
            $torneo->descripcion = $request->descripcion;
            $torneo->sede = $request->sede;
            $torneo->fecha_inicio = $request->fecha_inicio;
            $torneo->fecha_final = $request->fecha_final;
            $torneo->categoria_id = $request->categoria_id;
            $torneo->modalidad_id = $request->modalidad_id;
            $torneo->save();

            return response()->json(['mensaje' => 'Torneo registrado', 'data' => $torneo], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Torneo NO registrado'], 400);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
