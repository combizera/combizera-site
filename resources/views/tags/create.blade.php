<x-layout.admin title="Nova Tag" bodyClass="opdidas">
  <form class="admin__form" action="{{ route('tags.save') }}" method="post">
    {{-- Diretiva que cuida da segurança --}}
    @csrf
    <label for="number">Número</label>
    <input type="text" id="number" name="number">
    <label for="text">Texto</label>
    <input type="text" id="text" name="text">
    <button class="btn" type="submit">Cadastrar Tag</button>
  </form>
</x-layout.admin>
