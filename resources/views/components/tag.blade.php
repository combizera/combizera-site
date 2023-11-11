<ul class="ul features__cards">
  <div class="feature__line-1">
    {{-- como chamar foreach com laravel --}}
    @foreach ($tags as $tag)
      <li>
        <span>
          {{ $tag['number'] }}
        </span>
        <p>
          {{ $tag['text'] }}
        </p>
      </li>
    @endforeach
  </div>
</ul>
