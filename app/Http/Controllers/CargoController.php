<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargo.index')->with('cargos', $cargos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargos = new Cargo();

        $cargos->usuario = $request->get('usuario');
        $cargos->rol = $request->get('rol');
        $cargos->estado = $request->get('estado');

        $cargos->save();

        return redirect('/cargos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cargo = Cargo::find($id);
        return view('cargo.edit')->with('cargo', $cargo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cargo = Cargo::find($id);

        $cargo->usuario = $request->get('usuario');
        $cargo->rol = $request->get('rol');
        $cargo->estado = $request->get('estado');

        $cargo->save();

        return redirect('/cargos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cargo = Cargo::find($id);
        $cargo->delete();
        return redirect('/cargos');
    }
}
