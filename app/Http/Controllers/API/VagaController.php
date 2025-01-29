<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{

    private $objVagas;

    public function __construct()
    {
        $this->objVagas = new Vaga();
    }

    public function index()
    {
        return $this->objVagas->all();
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

        $vaga = Vaga::create($request->all());

        return response()->json($vaga, 201);
    }

    public function show(Vaga $vaga)
    {
        return $vaga;
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

        return response()->json($vaga, 200);
    }

    public function destroy(Vaga $vaga)
    {
        $vaga->delete();

        return response()->json("Destroy com sucesso!", 201);
    }
}
