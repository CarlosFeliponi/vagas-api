<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function index()
    {
        $vagas = Vaga::all();
        return view('vagas.index', compact('vagas'));
    }

    public function create()
    {
        return view('vagas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'cargo' => 'required|string',
            'salario' => 'required|numeric',
            'salario_visivel' => 'required|boolean',
            'descricao' => 'required|string',
        ]);

        Vaga::create($request->all());

        return redirect()->route('vagas.index');
    }

    public function show(Vaga $vaga)
    {
        return view('vagas.show', compact('vaga'));
    }

    public function edit(Vaga $vaga)
    {
        return view('vagas.edit', compact('vaga'));
    }

    public function update(Request $request, Vaga $vaga)
    {
        $request->validate([
            'titulo' => 'required|string',
            'cargo' => 'required|string',
            'salario' => 'required|numeric',
            'salario_visivel' => 'required|boolean',
            'descricao' => 'required|string',
        ]);

        $vaga->update($request->all());

        return redirect()->route('vagas.index');
    }

    public function destroy(Vaga $vaga)
    {
        $vaga->delete();
        return redirect()->route('vagas.index');
    }
}
