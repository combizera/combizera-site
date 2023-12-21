<x-layout.admin title="Novo Depoimento" bodyClass="opdidas">
  <form class="admin__form" action="{{ route('depoimentos.save') }}" method="post">
    {{-- Diretiva que cuida da segurança --}}
    @csrf
    <label for="text">Texto</label>
    <input type="text" id="text" name="text">
    <button class="btn" type="submit">Cadastrar Depoimento</button>
  </form>
</x-layout.admin>
