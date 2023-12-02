<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use DB;

class TagController extends Controller
{
  public function index()
  {
    $tags = Tag::all();

    return view('index', [
      'tags' => $tags
    ]);
  }

  public function create()
  {
    return view('tags.create');
  }

  public function store(Request $request)
  {
    $nameTag = $request->input('text');
    $numberTag = $request->input('number');
    // Aqui estou criando e linkando minha variavel com BD
    Tag::create([
      'text' => $nameTag,
      'number' => $numberTag
    ]);
  }
}
