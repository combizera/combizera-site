<x-layout.admin title="Nova Skill" bodyClass="opdidas">
  <form class="admin__form" action="{{ route('skills.save') }}" method="post">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    {{-- BOTÕES DE FECHAR --}}
    <x-layout.buttons />

    <label for="text">Texto</label>
    <input type="text" id="text" name="text">
    <label for="type">Tipo</label>
    <select id="type" name="type">
      <option value="hard">Hard Skill</option>
      <option value="soft">Soft Skill</option>
    </select>

    <button class="btn" type="submit">Cadastrar Skill</button>
  </form>
</x-layout.admin>
