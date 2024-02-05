@auth
  <div class="header__admin space-between">
    <nav>
      <ul class="ul">
        <li>
          <a
            href="{{ route('logout')}}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="material-symbols-outlined">
              logout
            </span>
            Deslogar
          </a>
        </li>
        <li>
          <a href="{{ route('admin') }}">
            <span class="material-symbols-outlined">
              edit
            </span>
            Editar Seções
          </a>
        </li>
        <li>
          <a href="{{ route('admin') }}">
            <span class="material-symbols-outlined">
              note_add
            </span>
            Cadastrar Projeto
          </a>
        </li>
      </ul>
    </nav>
    <div class="header__profile">
      <a href="">
        <p>Olá,
          <strong>
            Ygor Combi
          </strong>
        </p>
      </a>
    </div>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
@endauth
