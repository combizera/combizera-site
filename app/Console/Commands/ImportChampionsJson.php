<?php

namespace App\Console\Commands;

use App\Models\Champion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportChampionsJson extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'import:champions';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Importar os campeões';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $json = Storage::get('public/champions.json');

    if (!$json) {
      $this->error('Arquivo champions.json não encontrado.');
      return;
    }

    $data = json_decode($json, true);

    if (!$data || !isset($data['data'])) {
      $this->error('Formato de JSON inválido ou ausência de dados.');
      return;
    }

    foreach ($data['data'] as $champion) {
      $championName = $champion['name'] ?? 'Sem nome';
      $championId = $champion['key'];

      Champion::updateOrCreate(
        ['champion_id' => $championId],
        ['champion_name' => $championName]
      );
    }

    $this->info('Dados dos campeões importados com sucesso!');
  }
}
