

<x-layout title="API | League os Legends">
  <main id="lol" class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="lol container">
      <div class="lol__search">
        <h1 class="h1 txt-center">Veja sua maestria</h1>

        <form class="form" action="{{ route('api.maestria') }}" method="POST">
          @csrf
          <img src="{{ Vite::image('jinx-banner.webp') }}" alt="Banner da Jinx" />
          <div class="form__lol">
            <div class="form__item">
              <label for="name">Seu nome de Invocador</label>
              <input type="text" name="name" id="name" placeholder="Ex: LEI DO DUENDE">
            </div>
            <div class="form__item">
              <label for="name">Sua TAG</label>
              <input type="text" name="tag" id="tag" placeholder="420">
            </div>
          </div>
          <button type="submit" class="btn btn-pri">Confira sua maestria</button>
        </form>
      </div>

    </section>
  </main>
</x-layout>
