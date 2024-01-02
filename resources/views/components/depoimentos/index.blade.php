<ul class="ul">

  @foreach ($depoimentos as $key => $depoimento)
    <li class="center">
      <p class="p">
        {{ $depoimento['text'] }}
      </p>
    </li>
  @endforeach
</ul>
