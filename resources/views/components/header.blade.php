<header id="header" class="border-bottom">
  @auth
  <div class="header__admin">
    <nav class="header__nav container">
      <ul class="ul">
        <li>
          <a href="{{ route('admin') }}">Editar Seções</a>
        </li>
        <li>
          <a
            href="{{ route('logout')}}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Deslogar
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @endauth

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
          <a href="#projetos">Projetos</a>
        </li>
        <li>
          <a href="#depoimentos">Depoimentos</a>
        </li>
        <li>
          <a href="#skills">Skills</a>
        </li>
      </ul>
    </nav>

    {{-- IDIOMA --}}
    {{-- <div class="header__button">
      <button>Idioma</button>
    </div> --}}
  </div>
</header>
