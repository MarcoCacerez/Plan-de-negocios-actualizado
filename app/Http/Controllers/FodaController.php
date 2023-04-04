<?php

namespace App\Http\Controllers;

use App\Models\Foda;
use App\Models\Plan_de_negocio;
use Illuminate\Http\Request;

class FodaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plan_de_negocio $plan_de_negocio)
    {
        
        return view('foda.index',[
            'plan_de_negocio' => $plan_de_negocio,
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
    public function store(Request $request,Plan_de_negocio $plan_de_negocio)
    {
        //
        $validated = $request->validate([
            'tipo' => 'required',
            'descripcion' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Foda $foda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foda $foda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foda $foda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foda $foda)
    {
        //
    }
}
