<?php

namespace App\Http\Controllers;

use App\Models\Estructura_legal;
use App\Models\Plan_de_negocio;
use Illuminate\Http\Request;

class EstructuraLegalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plan_de_negocio $plan_de_negocio)
    {
        return view('estructura_legal.index', compact('plan_de_negocio'));
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
    public function show(Estructura_legal $estructura_legal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estructura_legal $estructura_legal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estructura_legal $estructura_legal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estructura_legal $estructura_legal)
    {
        //
    }
}
