<x-layout title="Login">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    <section class="login">
      <form action="{{ route('login') }}" method="POST">
        {{-- Diretiva que cuida da segurança --}}
        @csrf
        <label for="email">Email</label>
        <input required type="email" name="email" id="email">

        <br>

        <label for="password">Senha</label>
        <input required type="password" name="password" id="password">
        <button type="submit">Logar</button>
      </form>

      @if ($errors->any())
        <div class="erro">
          @foreach ($errors->all() as $erro)
          <li>
            {{ $erro }}
          </li>
          @endforeach
        </div>
      @endif
    </section>
  </main>
</x-layout>
