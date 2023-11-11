<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
  public function index()
  {
    $tags = [
      [
        'number' => '1',
        'text' => 'a'
      ],
      [
        'number' => '2',
        'text' => 'bb'
      ],
    ];

    return view('index', [
      'tags' => $tags
    ]);
  }
}
