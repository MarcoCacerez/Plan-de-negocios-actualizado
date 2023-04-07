<?php

namespace App\Http\Controllers;

use App\Models\Generalidades;
use App\Models\Plan_de_negocio;
use Illuminate\Http\Request;

class GeneralidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plan_de_negocio $plan_de_negocio)
    {
        $plan_de_negocio->load('generalidades');
        $generalidades_data = $plan_de_negocio->generalidades();

        return view('generalidades.index', compact('plan_de_negocio', 'generalidades_data'));
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
    public function show(Generalidades $generalidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Generalidades $generalidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Generalidades $generalidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Generalidades $generalidades)
    {
        //
    }
}
