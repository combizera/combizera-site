<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
  public function index()
  {
    $tags = [
      [
        'number' => '+25',
        'text' => 'feedbacks positivos'
      ],
      [
        'number' => '+15',
        'text' => 'projetos'
      ],
    ];

    return view('index', [
      'tags' => $tags
    ]);
  }
}
