<x-layout title="Admin | Ygor Combi">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="container admin">
      @auth
        <nav class="admin__nav border-bottom">
          <ul class="ul">
            <li>
              <a href="#" class="bold">Tags</a>
            </li>
            <li>
              <a href="#" class="">Projetos</a>
            </li>
          </ul>
        </nav>
      @endauth

      <div class="secao">
        {{ $slot }}
      </div>
    </section>
  </main>

  @isset($scripts)
    <x-slot:scripts>
      {{ $scripts }}
    </x-slot:scripts>
  @endisset
</x-layout>
