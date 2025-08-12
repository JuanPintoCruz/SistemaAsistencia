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

    public function show($id)
    {
        $trabajador = Trabajador::find($id);
        return response()->json($trabajador);
    }

    // public function store(Request $request)
    // {
    //     $trabajador = Trabajador::create($request->all());
    //     return response()->json($trabajador);
    // }
    // public function update(Request $request, $id)
    // {
    //     $trabajador = Trabajador::find($id);
    //     $trabajador->update($request->all());
    //     return response()->json($trabajador);
    // }
    // public function destroy($id)
    // {
    //     Trabajador::destroy($id);
    //     return response()->json(['message' => 'Eliminado']);
    // }
}