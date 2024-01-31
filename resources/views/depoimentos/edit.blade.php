<x-layout.admin>

  <form class="admin__form" action="{{ route('depoimentos.update', $depoimento) }}" method="POST" enctype="multipart/form-data">
    {{-- Diretiva que cuida da segurança --}}
    @csrf

    @method ('PUT')

    <div>
      <label for="person_name">Nome</label>
      <input type="text" id="person_name" name="person_name"
      {{-- Aqui eu estou usando o old para pegar o valor, caso de erro eu não perco. E depois verifico se oq está na esquerda é nulo, e atribuo oq está na direita --}}
      value="{{ old('person_name') ?? $depoimento->person_name }}">
      @error('person_name')
        <p class="txt-error">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="person_function">Função na Empresa</label>
      <input type="text" id="person_function" name="person_function" value="{{ old('person_function') ?? $depoimento->person_function }}">
      @error('person_function')
        <p class="txt-error">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="person_text">Depoimento</label>
      <textarea name="person_text" id="person_text" cols="30" rows="10">{{ old('person_text') ?? $depoimento->person_text }}</textarea>
      @error('person_text')
        <p class="txt-error">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="person_img">Foto</label>
      <input type="file" id="person_img" name="person_img">
      @error('person_img')
        <p class="txt-error">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="office_logo">Logo da Empresa</label>
      <input type="file" id="office_logo" name="office_logo">
      @error('office_logo')
        <p class="txt-error">{{ $message }}</p>
      @enderror
    </div>
    <button class="btn" type="submit">Editar Depoimento</button>
  </form>

</x-layout.admin>
