<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lojas.index', [
            'lojas' => Loja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lojas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $loja = new Loja();
        $loja->nome_fantasia = $request->nome_fantasia;
        $loja->razao_social = $request->razao_social;
        $loja->endereco = $request->endereco;
        $loja->nome_gerente = $request->nome_gerente;
        $loja->telefone = $request->telefone;
        $loja->is_aberta = $request->is_aberta ? true : false;

        $loja->save();

        return redirect()->route('lojas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('lojas.edit', [
            'loja' => Loja::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $loja = Loja::findOrFail($id);
        $loja->nome_fantasia = $request->nome_fantasia;
        $loja->razao_social = $request->razao_social;
        $loja->endereco = $request->endereco;
        $loja->nome_gerente = $request->nome_gerente;
        $loja->telefone = $request->telefone;
        $loja->is_aberta = $request->is_aberta ? true : false;

        $loja->save();

        return redirect()->route('lojas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loja = Loja::findOrFail($id);
        $loja->delete();

        return redirect()->route('lojas.index');
    }
}
