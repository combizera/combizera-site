<x-layout title="Consulta | League of Legends">
  <main id="lol" class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="lol container">
      <div class="lol__search">
        <h1>IDs dos Campeões com Maestria</h1>
        <ul class="champion__list ul">
          @foreach ($champions as $champion)
            <li>
              <h6 class="h6">{{ $champion->champion_name }}</h6>
              <span>Chest Granted: {{ $champion->chest_granted ? 'Sim' : 'Não' }}</span>
              <span>Champion Points: {{ $champion->champion_points }}</span>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  </main>
</x-layout>
