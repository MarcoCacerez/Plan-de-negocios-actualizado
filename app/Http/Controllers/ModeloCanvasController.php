<?php

namespace App\Http\Controllers;

use App\Models\Modelo_canvas;
use App\Models\Plan_de_negocio;
use Illuminate\Http\Request;

class ModeloCanvasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plan_de_negocio $plan_de_negocio)
    {
        $plan_de_negocio->load('modelos_canvas');
        $modelo_canvas_data = [
            "Socios clave" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Socios clave')->get(),
            "Actividades clave" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Actividades clave')->get(),
            "Propuestas de valor" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Propuestas de valor')->get(),
            "Relaciones con los clientes" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Relaciones con los clientes')->get(),
            "Segmentos de clientes" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Segmentos de clientes')->get(),
            "Recursos clave" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Recursos clave')->get(),
            "Canales" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Canales')->get(),
            "Estructura de costes" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Estructura de costes')->get(),
            "Fuentes de ingresos" => $plan_de_negocio->modelos_canvas()->where('cat_modelo','Fuentes de ingresos')->get(), 

        ];
        //dd($modelo_canvas_data);
        return view('modelo_canvas.index',[
            "plan_de_negocio" => $plan_de_negocio,
            "modelo_canvas_data" => $modelo_canvas_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo_canvas $modelo_canvas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo_canvas $modelo_canvas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelo_canvas $modelo_canvas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo_canvas $modelo_canvas)
    {
        //
    }
}
