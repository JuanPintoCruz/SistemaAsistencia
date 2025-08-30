<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas\Areas;

class AreasController extends Controller
{
    // Obtener datos de areas
    public function index()
    {
        $areas = Areas::all();
        return response()->json($areas);
    }

    public function show($id)
    {
        $area = Areas::find($id);  
        return response()->json($area);
    }

// Guardar nueva area
public function store(Request $request)
{
    try {
        $area = Areas::create($request->all());
        
        return response()->json([
            'success' => true,
            'message' => 'Área creada correctamente',
            'data' => $area
        ], 201);
        
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error al crear el área',
            'error' => $e->getMessage()
        ], 500);
    }
}

// Actualizar area existente  
public function update(Request $request, $id) 
{
    $area = Areas::find($id);
    if (!$area) {
        return response()->json(['message' => 'Área no encontrada'], 404);
    }
    
    $area->update($request->all());
    return response()->json([
        'success' => true,
        'message' => 'Área actualizada correctamente', 
        'data' => $area
    ], 200);
}

public function destroy($id)
{
    $area = Areas::find($id);
    if (!$area) {
        return response()->json(['message' => 'Área no encontrada'], 404);
    }
    
    $area->delete();
    return response()->json(['message' => 'Área eliminada correctamente'], 200);
}


}