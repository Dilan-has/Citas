<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CitasRequest;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;

class CitasController extends Controller
{
    public function agendar(Request $request)
    {
        $request->validate([
            'id_usuario'=> 'required',
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'dependencia' => 'required'
        ]);

        Cita::create([
            'id_usuario' => $request->input('id_usuario'),
            'nombre' => $request->input('nombre'),
            'fecha' => $request->input('fecha'),
            'dependencia' => $request->input('dependencia'),
        ]);

        return redirect('/home')->with('success', 'Cita guardada exitosamente');
    }

    public function index()
    {
        $idUsuario = Auth::id();
        $citas = Cita::where('id_usuario', $idUsuario)->get(); // Obtén todas las citas de la tabla 'citas' en la base de datos
        return view('layouts.citas', compact('citas')); // Pasa los datos a la vista 'home.index'
    }

}
