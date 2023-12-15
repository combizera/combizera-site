<x-layout title="Admin | Ygor Combi">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="container admin">
      @auth
        <nav class="admin__nav border-bottom">
          <ul class="ul">
            <li class="active">
              <a href="#" class="">Tags</a>
            </li>
            <li>
              <a href="#" class="">Skills</a>
            </li>
          </ul>
        </nav>
      @endauth

      <div class="secao admin__content">
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
