<x-layout.admin title="Admin | Ygor Combi">
  <ul class="ul">
    @forelse($tags as $tag)

    <li>
      <div href="{{ route('tags.edit', $tag) }}">
        {{ $tag->text }}
        {{ $tag->number }}
        <div>

        <button class="editar">
          editar
        </button>


        <form action="{{ route('tags.delete', $tag) }}" method="POST">
          {{-- Diretiva que cuida da segurança --}}
          @csrf

          @method ('DELETE')

          <button class="delete">
            deletar
          </button>
        </form>

        </div>
      </div>
    </li>

    @empty

    não tem tag

    @endforelse

  </ul>


</x-layout.admin>
