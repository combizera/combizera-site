<ul class="ul features__cards">
  {{-- Como chamar foreach com laravel. Diretiva --}}
  @foreach ($tags as $tag)
    <li class="center">
      <span class="border-card">
        {{ $tag['number'] }}
      </span>
      <p class="p">
        {{ $tag['text'] }}
      </p>
    </li>
  @endforeach
</ul>

<script>
  // Agora o front consegue pegar com segurança os dados
  const tags = {{ Js::from($tags) }};
</script>
