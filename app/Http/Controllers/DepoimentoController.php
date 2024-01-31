<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepoimentoRequest;
use App\Http\Requests\UpdateDepoimentoRequest;
use App\Models\Depoimento;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

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

  public function update(UpdateDepoimentoRequest $request, Depoimento $depoimento)
  {
    // Aqui vamos pegar os dados validados da request
    $validated = $request->validated();

    $pathImg = $depoimento->person_img;
    $pathLogo = $depoimento->office_logo;

    // VALIDAÇÃO PARA VER SE A IMG EXISTE E NÃO LOTAR O BD
    if (!empty($validated['person_img'])) {
      if (Storage::exists($depoimento->person_img)) {
        Storage::delete($depoimento->person_img);
      }
      $pathImg = $validated['person_img']->store('depoimento');
    }

    // VALIDAÇÃO PARA VER SE A IMG EXISTE E NÃO LOTAR O BD
    if (!empty($validated['office_logo'])) {
      if (Storage::exists($depoimento->office_logo)) {
        Storage::delete($depoimento->office_logo);
      }
      $pathLogo = $validated['office_logo']->store('depoimento');
    }

    $depoimento->update([
      'person_name' => $validated['person_name'],
      'person_function' => $validated['person_function'],
      'person_text' => $validated['person_text'],
      'person_img' => $pathImg,
      'office_logo' => $pathLogo
    ]);

    return to_route('admin');
  }

  public function delete(Depoimento $depoimento)
  {
    $depoimento->delete();

    return to_route('admin');
  }
}
