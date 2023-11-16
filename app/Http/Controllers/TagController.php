<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
  public function index()
  {
    $tags = [
      [
        'number' => '25',
        'text' => 'feedbacks positivos'
      ],
      [
        'number' => '15',
        'text' => 'projetos'
      ],
    ];

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
    return view('tags.create');
  }
}
