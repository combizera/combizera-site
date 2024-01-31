<ul class="ul">
  <h2 class="h2">Skills</h2>
  {{-- SOFT --}}
  <li class="article">
    <h4 class="h4">Soft Skills</h4>
    <div class="skills__group grid-2">
      <div class="skills__txt">
        <p>Habilidades comportamentais relacionadas a maneira como lido com situações com o time e também comigo mesmo. Listei as que mais se destacam no meu dia a dia.</p>
      </div>
      <ul class="ul skills__list grid-2">

        @foreach ($skills->where('type', \App\Enums\SkillType::SOFT->value)->all() as $skill)
          <li>{{ $skill['text'] }}</li>
        @endforeach

      </ul>
    </div>
  </li>

  {{-- HARD --}}
  <li class="article">
    <h4 class="h4">Hard Skills</h4>
    <div class="skills__group grid-2">
      <div class="skills__txt">
        <p>Competências técnicas concretas adquiridas por meio de conhecimentos práticos, envolvendo o domínio de ferramentas, tecnologias e conhecimentos específicos para realizar tarefas profissionais.
          <br><br>
          Certificações, treinamentos e experiências práticas são formas de desenvolver e destacar essas habilidades.</p>
      </div>
      <ul class="ul skills__list grid-2">

        @foreach ($skills->where('type', \App\Enums\SkillType::HARD->value)->all() as $skill)
          <li>{{ $skill['text'] }}</li>
        @endforeach

      </ul>
    </div>
  </li>
</ul>



