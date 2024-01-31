<x-layout.admin title="Admin | Ygor Combi">
  {{-- TAGS --}}
  @if ($tags->isNotEmpty())
    <ul class="ul active">
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

  {{-- SKILLS --}}
  @if ($skills->isNotEmpty())
    <ul class="ul">
      <a class="btn bg-white btn-add" href="{{ route('skills.create') }}" class="editar">
        <img src="{{ Vite::image('icons/icon-pencil-more.svg') }}" alt="Adicionar" />
        Adicionar
      </a>
      @foreach($skills as $skill)

      <li class="admin__item space-between border-bottom" data-route="{{ route('skills.delete', $skill) }}">
        <div href="{{ route('skills.edit', $skill) }}">
          {{ $skill->text }}
          {{ $skill->type }}
        </div>

        <div class="admin__item-buttons">
          <a class="btn" href="{{ route('skills.edit', $skill) }}" class="editar">
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
    <a href="{{ route('skills.create') }}">Adicionar Skill</a>
  @endif

  {{-- DEPOIMENTOS  --}}
  @if ($depoimentos->isNotEmpty())
    <ul class="ul">
      <a class="btn bg-white btn-add" href="{{ route('depoimentos.create') }}" class="editar">
        <img src="{{ Vite::image('icons/icon-pencil-more.svg') }}" alt="Adicionar" />
        Adicionar
      </a>
      @foreach($depoimentos as $depoimento)

      <li class="admin__item space-between border-bottom" data-route="{{ route('depoimentos.delete', $depoimento) }}">
        <div href="{{ route('depoimentos.edit', $depoimento) }}">
          {{ $depoimento->person_text }}
        </div>

        <div class="admin__item-buttons">
          <a class="btn" href="{{ route('depoimentos.edit', $depoimento) }}" class="editar">
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
    <a href="{{ route('depoimentos.create') }}">Adicionar Depoimento</a>
  @endif

  {{-- MODAL --}}
  <x-modal></x-modal>

  <x-slot:scripts>
    <script src="{{ Vite::script('modal.js') }}"></script>
  </x-slot:scripts>

  <x-slot:scripts>
    <script src="{{ Vite::script('admin-accordion.js') }}"></script>
  </x-slot:scripts>
</x-layout.admin>
