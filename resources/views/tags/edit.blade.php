<x-layout.admin>

  <form action="{{ route('tags.update', $tag) }}" method="POST">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    @method ('PUT')

    <label for="number">Número</label>
    <input type="text" id="number" name="number" value="{{ $tag->number }}">
    <label for="text">Texto</label>
    <input type="text" id="text" name="text" value="{{ $tag->text }}">
    <button type="submit">Editar Tag</button>
  </form>

</x-layout.admin>
