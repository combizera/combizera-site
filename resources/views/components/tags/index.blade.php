<ul class="ul features__cards scroll-horizontal">
  @php
    $colors = ['#9CD3FF', '#864FCC', '#EA5C5C', '#FFDE68'];
    shuffle($colors);
  @endphp

  @foreach ($tags as $key => $tag)
    <li class="center">
      <span class="border-card color{{ ($key % 4) + 1 }}" style="background-color: {{ $colors[$key % 4] }}">
        +{{ $tag['number'] }}
      </span>
      <p class="p">
        {{ $tag['text'] }}
      </p>
    </li>
  @endforeach
</ul>
