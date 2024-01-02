<x-layout.admin>

  <form class="admin__form" action="{{ route('skills.update', $skill) }}" method="POST">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    @method ('PUT')
    <label for="text">Texto</label>
    <input type="text" id="text" name="text">
    <label for="type">Tipo</label>
    <select id="type" name="type">
      <option value="hard">Hard Skill</option>
      <option value="soft">Soft Skill</option>
    </select>
    <button class="btn" type="submit">Editar Skill</button>
  </form>

</x-layout.admin>
