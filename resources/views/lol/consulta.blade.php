<x-layout title="Consulta | League of Legends">
  <main id="lol" class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="lol container">
      <div class="lol__search">
        <h1>IDs dos Campeões com Maestria</h1>

        <nav class="lol__nav">
          <ul class="ul">
            <li>
              <button href="">Maestria</button>
            </li>
            <li>
              <button href="">Baús</button>
            </li>
          </ul>
        </nav>
        <ul class="lol__list ul grid-4">
          @foreach ($champions as $champion)
            <li class="border-card">
              @php
                  $championName = str_replace([' ', "'", '.'], '', $champion->champion_name);
                  $imageUrl = "https://ddragon.leagueoflegends.com/cdn/img/champion/loading/{$championName}_0.jpg";
              @endphp
              <img src="{{ $imageUrl }}" alt="{{ $champion->champion_name }}"/>

              <div class="lol__list-txt">
                <h6 class="h6">{{ $champion->champion_name }}</h6>
                @if ($champion->chest_granted)
                    <img src="{{ Vite::image('lol/chest.webp') }}" alt="Sim">
                @else
                    <img src="{{ asset('caminho/para/sua/imagem/nao.png') }}" alt="Não">
                @endif
                <span>Pontos de Maestria: {{ $champion->champion_points }}</span>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  </main>
</x-layout>
