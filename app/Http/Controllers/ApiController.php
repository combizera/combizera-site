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

  // public function maestria(Request $request)
  // {
  //   $payload = $request->only([
  //     "name",
  //     "tag",
  //   ]);

  //   $resultSummoner = Http::withHeader("X-Riot-Token", env("API_RIOT"))->get("https://americas.api.riotgames.com/riot/account/v1/accounts/by-riot-id/{$payload['name']}/{$payload['tag']}");

  //   dd($resultSummoner->json());
  // }

  public function maestria(Request $request)
  {
    $encrypetedSummonerId = "T1p1AMGkELObSrHIn0qpYAzpxEU2NFtlfIx_l00O8HEH3tUiHpGJYhQyu5pIncB5go9e9MayYwTgjA";

    // dd($encrypetedSummonerId);

    $resultSummoner = Http::withHeader("X-Riot-Token", env("API_RIOT"))->get("https://br1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-puuid/{$encrypetedSummonerId}");

    if ($resultSummoner->successful()) {
      $maestriaData = $resultSummoner->json();
      dd($maestriaData);
    } else {
      return response()->json(['error' => 'Falha ao obter dados de maestria'], $resultSummoner->status());
    }
  }
}
