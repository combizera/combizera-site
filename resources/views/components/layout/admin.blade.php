<x-layout title="Admin | Ygor Combi">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="container">
      vc está logado
    </section>

    <nav>
      <ul class="ul">
        <li>
          <a href="#">Tags</a>
        </li>
      </ul>
    </nav>

    {{ $slot }}


  </main>
</x-layout>
