<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Models\Depoimento;
use App\Models\Skill;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function login()
  {
    if (Auth::check()) {
      return to_route('admin');
    } else {
      return view('admin/login');
    }
  }

  public function auth(LoginFormRequest $request)
  {
    if (Auth::attempt($request->validated())) {
      return to_route('admin');
    } else {
      return redirect()->back()->withErrors([
        'login' => 'Paizão, você não tem acesso'
      ]);
    }
  }
  public function index()
  {
    $tags = Tag::all();
    $skills = Skill::all();
    $depoimentos = Depoimento::all();

    return view('admin/index', [
      'tags' => $tags,
      'skills' => $skills,
      'depoimentos' => $depoimentos
    ]);
  }
}
