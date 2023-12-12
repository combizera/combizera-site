<x-layout title="Admin | Ygor Combi">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="container">
      <nav class="admin__nav border-bottom">
        <ul class="ul">
          <li>
            <a href="#">Tags</a>
          </li>
        </ul>
      </nav>

      {{ $slot }}
    </section>

  </main>
</x-layout>
