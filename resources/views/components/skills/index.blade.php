<ul class="ul features__cards scroll-horizontal">
  <h2 class="h2">Skills</h2>

  {{-- SOFT --}}
  <article>
    <h4 class="h4">Soft Skills</h4>
    <div class="skills__group grid-2">
      <div class="skills__txt">
        <p>Habilidades comportamentais relacionadas a maneira como lido com situações com o time e também comigo mesmo. Listei as que mais se destacam no meu dia a dia.</p>
      </div>
      <ul class="ul skills__list grid-2">

      </ul>
    </div>
  </article>

  @foreach ($skills as $skil => $skill)
    <li>{{ $skill['text'] }}</li>
  @endforeach
</ul>


  {{-- HARD --}}
  <article>
    <h4 class="h4">Hard Skills</h4>
    <div class="skills__group grid-2">
      <div class="skills__txt">
        <p>Habilidades comportamentais relacionadas a maneira como lido com situações com o time e também comigo mesmo. Listei as que mais se destacam no meu dia a dia.</p>
      </div>
      <ul class="ul skills__list grid-2">
        <li>Inteligência Emocional</li>
        <li>Comunicação Não Violenta</li>
        <li>Comunicação</li>
        <li>Escuta Ativa</li>
        <li>Capacidade de Priorização</li>
      </ul>
    </div>
  </article>
