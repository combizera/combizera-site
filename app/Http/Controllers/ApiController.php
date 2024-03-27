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

  public function consulta(Request $request)
  {
    $encryptedSummonerId = "T1p1AMGkELObSrHIn0qpYAzpxEU2NFtlfIx_l00O8HEH3tUiHpGJYhQyu5pIncB5go9e9MayYwTgjA";

    $resultSummoner = Http::withHeader("X-Riot-Token", env("API_RIOT"))
      ->get("https://br1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-puuid/{$encryptedSummonerId}");

    $maestriaData = $resultSummoner->json();

    $championIds = collect($maestriaData)->pluck('championId')->toArray();

    // Recupera os campeões do banco de dados com os IDs correspondentes
    $champions = Champion::whereIn('champion_id', $championIds)->get();

    // Itera sobre os campeões para atribuir as informações corretas
    foreach ($champions as $champion) {
      $championId = $champion->champion_id;
      $championInfo = collect($maestriaData)->firstWhere('championId', $championId);

      if ($championInfo) {
        // Atribui os valores de 'chestGranted' e 'championPoints' ao objeto Champion
        $champion->chest_granted = $championInfo['chestGranted'] ?? false;

        $champion->champion_points = $championInfo['championPoints'] ?? 0;
      } else {
        // Define valores padrão caso as informações não sejam encontradas
        $champion->chest_granted = false;
        $champion->champion_points = 0;
      }
    }

    // Ordena a coleção de campeões com base nos pontos de maestria
    $champions = $champions->sortByDesc('champion_points')->sortByDesc(function ($champion) {
      return (int) str_replace('.', '', $champion->champion_points);
    });

    return view('lol.consulta', ['champions' => $champions]);
  }
}
