<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index()
  {
    $tags = Tag::all();

    return view('index', [
      'tags' => $tags
    ]);
  }

  public function error()
  {
    return view('errors.404');
  }
}
