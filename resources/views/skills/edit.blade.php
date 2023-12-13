<x-layout.admin>

  <form class="admin__form" action="{{ route('skills.update', $tag) }}" method="POST">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    @method ('PUT')

    <label for="number">Categoria</label>
    {{-- Aqui tem que ser um radio button com Soft Skills ou Hard Skills --}}
    {{-- <input type="text" id="number" name="number" value="{{ $category->number }}"> --}}
    <label for="text">Texto</label>
    <input type="text" id="text" name="text" value="{{ $skill->text }}">
    <button class="btn" type="submit">Editar Skill</button>
  </form>

</x-layout.admin>
