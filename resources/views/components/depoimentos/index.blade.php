<ul class="grid-3 ul">
  @foreach ($depoimentos as $key => $depoimento)
    <li class="border-card">
      <img
        loading="lazy"
        src="{{ Storage::url($depoimento['office_logo']) }}"
        alt="Logotipo da Empresa"
        class="depo__logo" />
      <p class="depo__depo">
        {!! Str::replace("\n", '<br>', $depoimento['person_text']) !!}
      </p>
      <div class="depo__profile">
        <img
          loading="lazy"
          src="{{ Storage::url($depoimento['person_img']) }}"
          alt="Logotipo da Empresa" />
        <div>
          <p>
            {{ $depoimento['person_name'] }}
          </p>
          <span>
            {{ $depoimento['person_function'] }}
          </span>
        </div>
      </div>
    </li>
  @endforeach
</ul>
