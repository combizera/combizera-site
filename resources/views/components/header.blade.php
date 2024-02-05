<header id="header" class="border-bottom">
  <x-header-admin />

  <div class="header container space-between">
    {{-- LOGO --}}
    <div class="header__logo">
      <a href="/" aria-label="Logo Combizera">
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

    {{-- MENU --}}
    <div class="header__button">
      <button>Menu</button>
    </div>
  </div>
</header>
