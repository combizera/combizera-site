<x-layout title="Biblioteca de Padrões | Ygor Combi">
  <main id="project" class="index bg-pattern project" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    {{-- TÍTULO --}}
    <x-project.header />

    {{-- CONTEÚDO --}}
    <section class="project__content container flex-column">
      {{-- IMAGE --}}
      <x-project.image />

      {{-- TEXTO --}}
      <x-project.text />

      {{-- TEXTO --}}
      <x-project.text />
    </section>

    {{-- PREV/NEXT --}}
    <x-project.footer />
  </main>
</x-layout>
