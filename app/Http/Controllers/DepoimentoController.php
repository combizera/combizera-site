<?php

namespace App\Http\Controllers;

use App\Models\Depoimento;
use Illuminate\Http\Request;
use DB;

class DepoimentosController extends Controller
{
    public function index()
    {
        $depoimentos = Depoimento::all();

        return view('index', [
        'depoimentos' => $depoimentos
        ]);
    }

    public function create()
    {
        return view('depoimentos.create');
    }

    public function store(Request $request)
    {
        $depoimentoText = $request->input('text');
        // Aqui estou criando e linkando minha variavel com BD
        Depoimento::create([
        'text' => $depoimentoText,
        ]);

        return to_route('admin');
    }

    public function edit(Depoimento $depoimento)
    {
      return view('depoimentos.edit', ['depoimento' => $depoimento]);
    }

    public function update(Request $request, Depoimento $depoimento)
    {
        $depoimentoText = $request->input('text');

        $depoimento->update([
        'text' => $depoimentoText,
        ]);

        return to_route('admin');
    }

    public function delete(Depoimento $depoimento)
    {
        $depoimento->delete();

        return to_route('admin');
    }
}
