<x-layout.admin title="Admin | Ygor Combi">
  @if ($tags->isNotEmpty())
    <ul class="ul">
      @foreach($tags as $tag)

      <li class="admin__item space-between border-bottom" data-route="{{ route('tags.delete', $tag) }}">
        <div href="{{ route('tags.edit', $tag) }}">
          {{ $tag->text }}
          {{ $tag->number }}
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
      <div class="modal__header">
        <button class="modal__close">X</button>
      </div>
      <p class="modal__message">
        V-você tem certeza? Essa ação é irreversível 😣
        <form action="" method="POST">
          {{-- Diretiva que cuida da segurança --}}
          @csrf

          @method ('DELETE')

          <button class="delete btn">
            Sim
          </button>
        </form>
      </p>
    </div>
  </div>

  <x-slot:scripts>
    <script src="{{ Vite::script('modal.js') }}"></script>
  </x-slot:scripts>
</x-layout.admin>
