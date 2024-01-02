<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use DB;

class SkillController extends Controller
{
  public function index()
  {
    $skills = Skill::all();

    return view('index', [
      'skills' => $skills
    ]);
  }

  public function create()
  {
    return view('skills.create');
  }

  public function store(Request $request)
  {
    $nameSkill = $request->input('text');
    $typeSkill = $request->input('type');
    // Aqui estou criando e linkando minha variavel com BD
    Skill::create([
      'text' => $nameSkill,
      'type' => $typeSkill
    ]);

    return to_route('admin');
  }

  public function edit(Skill $skill)
  {
    return view('skills.edit', ['skill' => $skill]);
  }

  public function update(Request $request, Skill $skill)
  {
    $nameSkill = $request->input('text');
    $typeSkill = $request->input('type');

    $skill->update([
      'text' => $nameSkill,
      'type' => $typeSkill
    ]);

    return to_route('admin');
  }

  public function delete(Skill $skill)
  {
    $skill->delete();

    return to_route('admin');
  }
}
