<x-layout.admin title="Admin | Ygor Combi">
  @if ($tags->isNotEmpty())
    <ul class="ul">
      <a class="btn bg-white btn-add" href="{{ route('tags.create') }}" class="editar">
        <img src="{{ Vite::image('icons/icon-pencil-more.svg') }}" alt="Adicionar" />
        Adicionar
      </a>
      @foreach($tags as $tag)

      <li class="admin__item space-between border-bottom" data-route="{{ route('tags.delete', $tag) }}">
        <div href="{{ route('tags.edit', $tag) }}">
          {{ $tag->number }}
          {{ $tag->text }}
        </div>

        <div class="admin__item-buttons">
          <a class="btn" href="{{ route('tags.edit', $tag) }}" class="editar">
            <img src="{{ Vite::image('icons/icon-pencil.svg') }}" alt="Editar" />
          </a>
          <button class="delete btn">
            <img src="{{ Vite::image('icons/icon-trash.svg') }}" alt="Apagar" />
          </button>
        </div>
      </li>

      @endforeach

    </ul>

  @else

    <a href="{{ route('tags.create') }}">Adicionar Tag</a>

  @endif

  {{-- MODAL --}}
  <div class="modal__wrapper center">
    <div class="modal">
      <div class="modal__header border-bottom space-between">
        <p>deletar.exe</p>
        <button class="modal__close">
          <img src="{{ Vite::image('icons/icon-close.svg') }}" alt="Fechar Modal" />
        </button>
      </div>
      <div class="modal__content">
        <p class="modal__message">
          V-você tem certeza? Essa ação é irreversível
          <br>
          &emsp;😣
          <br>
          👉👈
          <br>
          &emsp;👗
          <br>
          👠👠
        </p>
        <form class="modal__form" action="" method="POST">
          {{-- Diretiva que cuida da segurança --}}
          @csrf

          @method ('DELETE')

          <div class="btns">
            <button class="btn btn-pri button-delete">
              Apagar
            </button>
            <a href="#" class="btn">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <x-slot:scripts>
    <script src="{{ Vite::script('modal.js') }}"></script>
  </x-slot:scripts>
</x-layout.admin>
