<x-layout title="Página Não Encontrada =(">
  <main class="bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <div class="container secao center flex-column error404">
      <h1 class="h1">404</h1>
      <p>Página não encontrada 😶‍🌫️</p>
      <div class="btns">
        <a href="{{ route('index') }}" class="btn btn-pri">Voltar p/ Início</a>
        <a href="{{ route('index') }}#projetos" class="btn btn-sec">Ver Projetos</a>
      </div>
    </div>
  </main>

</x-layout>
