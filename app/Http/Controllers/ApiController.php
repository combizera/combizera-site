<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
  public function form()
  {
    return view('lol');
  }

  public function maestria(Request $request)
  {
    $payload = $request->only([
      "name",
      "tag",
    ]);
    $resultSummoner = Http::withHeader("X-Riot-Token", env("API_RIOT"))->get("https://americas.api.riotgames.com/riot/account/v1/accounts/by-riot-id/{$payload['name']}/{$payload['tag']}");

    dd($resultSummoner->json());
  }
}
