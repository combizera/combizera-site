<x-layout.admin>

  <form class="admin__form" action="{{ route('depoimentos.update', $depoimento) }}" method="POST">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    @method ('PUT')

    <label for="text">Texto</label>
    <input type="text" id="text" name="text" value="{{ $depoimento->text }}">
    <button class="btn" type="submit">Editar Depoimento</button>
  </form>

</x-layout.admin>
