<x-layout.admin title="Admin | Ygor Combi">
  <ul class="ul">
    @forelse($tags as $tag)

    <li class="admin__item space-between border-bottom">
      <div href="{{ route('tags.edit', $tag) }}">
        {{ $tag->text }}
        {{ $tag->number }}
      </div>

      <div class="admin__item-buttons">
        <a class="btn" href="{{ route('tags.edit', $tag) }}" class="editar">
          <img src="{{ Vite::image('icons/icon-pencil.svg') }}" alt="Editar" />
        </a>

        <form action="{{ route('tags.delete', $tag) }}" method="POST">
          {{-- Diretiva que cuida da segurança --}}
          @csrf

          @method ('DELETE')

          <button class="delete btn">
            <img src="{{ Vite::image('icons/icon-trash.svg') }}" alt="Apagar" />
          </a>
        </form>
      </div>
    </li>

    @empty

    Não tem nenhuma TAG

    <a href="{{ route('tags.create') }}">Adicionar Tag</a>

    @endforelse

  </ul>

</x-layout.admin>
