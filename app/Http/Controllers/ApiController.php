<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
  public function index()
  {
    return view('lol.index');
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

  public function consulta(Request $request)
  {
    $encryptedSummonerId = "T1p1AMGkELObSrHIn0qpYAzpxEU2NFtlfIx_l00O8HEH3tUiHpGJYhQyu5pIncB5go9e9MayYwTgjA";

    $resultSummoner = Http::withHeader("X-Riot-Token", env("API_RIOT"))
      ->get("https://br1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-puuid/{$encryptedSummonerId}");

    $maestriaData = $resultSummoner->json();

    $championIds = collect($maestriaData)->pluck('championId')->toArray();

    // Recupera os campeões do banco de dados com os IDs correspondentes
    $champions = Champion::whereIn('champion_id', $championIds)->get();

    return view('lol.consulta', ['champions' => $champions]);
  }
}
