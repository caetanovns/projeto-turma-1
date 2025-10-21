<?php

namespace App\Http\Controllers;

use App\Models\CategoriaVeiculo;
use Illuminate\Http\Request;

class CategoriaVeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categoria.index',['categorias' => CategoriaVeiculo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        CategoriaVeiculo::create($request->all());

        return redirect()->route('categorias.index');
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
        return view('categoria.edit', [
            'categoria' => CategoriaVeiculo::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = CategoriaVeiculo::findOrFail($id);
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = CategoriaVeiculo::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
