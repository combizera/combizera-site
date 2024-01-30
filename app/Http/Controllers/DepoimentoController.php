<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepoimentoRequest;
use App\Models\Depoimento;
use Illuminate\Http\Request;
use DB;

class DepoimentoController extends Controller
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

  public function store(StoreDepoimentoRequest $request)
  {
    // Aqui vamos pegar os dados validados da request
    $validated = $request->validated();

    // PARA SALVAR IMG
    $pathImg = $validated['person_img']->store('depoimento');
    $pathLogo = $validated['office_logo']->store('depoimento');

    // Aqui estou criando e linkando minha variavel com BD
    Depoimento::create([
      'person_name' => $validated['person_name'],
      'person_function' => $validated['person_function'],
      'person_text' => $validated['person_text'],
      'person_img' => $pathImg,
      'office_logo' => $pathLogo
    ]);

    return to_route('admin');
  }

  public function edit(Depoimento $depoimento)
  {
    return view('depoimentos.edit', ['depoimento' => $depoimento]);
  }

  public function update(StoreDepoimentoRequest $request, Depoimento $depoimento)
  {
    // Aqui vamos pegar os dados validados da request
    $validated = $request->validated();

    $depoimento->update([
      'person_name' => $validated['person_name'],
      'person_function' => $validated['person_function'],
      'person_text' => $validated['person_text'],
      'person_img' => $validated['person_img'],
      'office_logo' => $validated['office_logo']
    ]);

    return to_route('admin');
  }

  public function delete(Depoimento $depoimento)
  {
    $depoimento->delete();

    return to_route('admin');
  }
}
