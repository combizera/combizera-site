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

    return to_route('admin');
  }

  public function edit(Tag $tag)
  {
    return view('tags/edit', ['tag' => $tag]);
  }

  public function update(Request $request, Tag $tag)
  {
    $nameTag = $request->input('text');
    $numberTag = $request->input('number');

    $tag->update([
      'text' => $nameTag,
      'number' => $numberTag
    ]);

    return to_route('admin');
  }

  public function delete(Tag $tag)
  {
    $tag->delete();

    return to_route('admin');
  }
}
