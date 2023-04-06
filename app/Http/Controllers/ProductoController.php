<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\User;
use App\Models\Plan_de_negocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plan_de_negocio $plan_de_negocio)
    {
        $listaproductos = $plan_de_negocio->productos()->paginate(5);
        return view('producto.index', compact('plan_de_negocio', 'listaproductos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Plan_de_negocio $plan_de_negocio)
    {
        return view('producto.create', compact('plan_de_negocio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Plan_de_negocio $plan_de_negocio)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'precio_de_costo' => 'required',
            'precio_de_venta' => 'required',
            'descripcion' => 'required',
        ]);

        $producto = $plan_de_negocio->productos()->create($validated);

        return redirect()->route('plan_de_negocio.producto.index', compact('plan_de_negocio'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan_de_negocio $plan_de_negocio, Producto $producto)
    {
        Producto::destroy($producto->id);

        $listaproductos = $plan_de_negocio->productos()->paginate(5);
        return view('producto.index', compact('plan_de_negocio', 'listaproductos'));
    }
}
