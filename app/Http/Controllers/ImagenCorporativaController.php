<?php

namespace App\Http\Controllers;

use App\Models\Imagen_corporativa;
use App\Models\Plan_de_negocio;
use Illuminate\Http\Request;

class ImagenCorporativaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plan_de_negocio $plan_de_negocio)
    {
        return view('imagen_corporativa.index', compact('plan_de_negocio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Plan_de_negocio $plan_de_negocio)
    {
        return view('imagen_corporativa.create', compact('plan_de_negocio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Plan_de_negocio $plan_de_negocio)
    {
        $request->validate([
            'logotipo' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'justificacion_logo' => 'required',
            'nombre_corporativo' => 'required',
            'justificacion_nombre' => 'required',
            'eslogan' => 'required',
            'justificacion_eslogan' => 'required',
        ]);
        
        $data = $request->only('justificacion_logo', 'nombre_corporativo', 'justificacion_nombre', 'eslogan', 'justificacion_eslogan');

        if ( $request->hasFile('logotipo') )
        {
            $file = $request->file('logotipo');
            $destinationPath = 'images/logotipos/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('logotipo')->move($destinationPath, $filename);
            $data['logotipo'] = $destinationPath . $filename;
        }

        $plan_de_negocio->imagenes_corporativas()->create($data);

        return redirect()->route('plan_de_negocio.imagen_corporativa.index', compact('plan_de_negocio'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Imagen_corporativa $imagen_corporativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imagen_corporativa $imagen_corporativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imagen_corporativa $imagen_corporativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imagen_corporativa $imagen_corporativa)
    {
        //
    }
}
