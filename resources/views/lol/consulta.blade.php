<x-layout title="Consulta | League os Legends">
  <main id="lol" class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="lol container">
      <div class="lol__search">
        <h1>IDs dos Campeões com Maestria</h1>
        <div class="champion-list">
            @foreach ($championIds as $championId)
                <div class="champion-id">{{ $championId }}</div>
            @endforeach
        </div>
      </div>
    </section>
  </main>
</x-layout>
