<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador\Trabajador;

class TrabajadorController extends Controller
{
    //  Obtener todos
    public function index()
    {
        $trabajadores = Trabajador::all();
        return response()->json($trabajadores);
    }

    // Obtener uno POR ID  los trabajadores 
    public function show($id)
    {
        $trabajador = Trabajador::find($id);
        return response()->json($trabajador);
    }

    //Obtener guardar 
public function store(Request $request)
{
    // Crear el trabajador con los datos recibidos
    $trabajador = Trabajador::create($request->all());

    // Verificar si se guardó correctamente
    if ($trabajador) {
        return response()->json(['message' => 
        'Trabajador guardado correctamente'], 201); 

    } else {
        return response()->json(['message' =>
        'Error al guardar el trabajador'], 500);
    }
}

    public function update(Request $request, $id)
    {
        $trabajador = Trabajador::find($id);
        $trabajador->update($request->all());
        return response()->json($trabajador);
    }
    public function destroy($id)
    {
        Trabajador::destroy($id);
        return response()->json(['message' => 'Eliminado']);
    }
}