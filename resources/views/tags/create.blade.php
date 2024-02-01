<x-layout.admin title="Nova Tag" bodyClass="opdidas">
  <form class="admin__form" action="{{ route('tags.save') }}" method="post">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    {{-- BOTÕES DE FECHAR --}}
    <x-layout.buttons />

    <label for="number">Número</label>
    <input type="text" id="number" name="number" placeholder="Ex: +15">
    <label for="text">Texto</label>
    <input type="text" id="text" name="text" placeholder="Ex: Projetos lançados">
    <button class="btn" type="submit">Cadastrar Tag</button>
  </form>
</x-layout.admin>
