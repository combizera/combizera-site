<?php

namespace App\Http\Controllers;

use App\Models\Depoimento;
use App\Models\Skill;
use App\Models\Tag;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index()
  {
    $tags = Tag::all();
    $skills = Skill::all();
    $depoimentos = Depoimento::all();

    return view('index', [
      'tags' => $tags,
      'skills' => $skills,
      'depoimentos' => $depoimentos
    ]);
  }

  public function error()
  {
    return view('errors.404');
  }
}
