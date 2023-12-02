<header id="header" class="border-bottom">
  @auth
  <div class="header__admin">
    vc esta logado
  </div>
  @endauth

  @guest
  <div class="header__admin">
    vc é um visitante
  </div>
  @endguest
  <div class="header container space-between">
    {{-- LOGO --}}
    <div class="header__logo">
      <a href="/">
        <x-icons.logo></x-icons>
      </a>
    </div>

    {{-- NAV --}}
    <nav class="header__nav">
      <ul class="ul">
        <li>
          <a href="">Link 1</a>
        </li>
        <li>
          <a href="">Link 2</a>
        </li>
        <li>
          <a href="">Link 3</a>
        </li>
      </ul>
    </nav>

    {{-- BOTÃO --}}
    <div class="header__button">
      <button>Idioma</button>
    </div>
  </div>
</header>
