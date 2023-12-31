<x-layout title="Biblioteca de Padrões | Ygor Combi">
  <main id="project" class="index bg-pattern project" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">
    {{-- TÍTULO --}}
    <section class="project__title container grid-3">
      <div class="project__title-info">
        <h1>Biblioteca de Padrões</h1>
        <p>Advbox Documentação</p>
        <ul class="ul grid-3">
          <li>
            <p>País</p>
            <span>Brasil</span>
          </li>
          <li>
            <p>Ano</p>
            <span>2023</span>
          </li>
          <li>
            <p>Trabalho</p>
            <span>Abc</span>
          </li>
        </ul>
      </div>
      <div class="project__title-txt">
        <p>ADVBOX é um software Jurídico especializado na gestão de tarefas, pessoas e processos integrados com tribunais. Além do básico de um software jurídico, como gestão de processos, o sistema ADVBOX conta com Gestão BI, Controle de Produtividade por Tarefas (taskscore) e CRM integrado.</p>
      </div>
    </section>

    {{-- CONTEÚDO --}}
    <section class="project__content container flex-column">
      <div class="project__img">
        <img class="border-card" src="{{ Vite::image('works/advbox.png') }}" alt="Foto do Ygor Combi" />
      </div>
      <div class="project__txt">
        <h2 class="h2">Qual era o problema?</h2>
        <p>
          For three years, every semester, I used to stress about class planning. Figuring out which classes to take seemed like an impossible, convoluted task.
          <br><br>
          Through research, I discovered that this was not an isolated problem, but one that every university student faced. So I decided to automate this process and by building a machine learning algorithm that makes it easier for students to select and register for classes.
        </p>
      </div>
      <div class="project__txt">
        <h2 class="h2">Qual foi nosso Produto Mínimo Viável(MVP)?</h2>
        <p>
          For three years, every semester, I used to stress about class planning. Figuring out which classes to take seemed like an impossible, convoluted task.
          <br><br>
          Through research, I discovered that this was not an isolated problem, but one that every university student faced. So I decided to automate this process and by building a machine learning algorithm that makes it easier for students to select and register for classes.
        </p>
      </div>
    </section>

    {{-- PREV/NEXT --}}
    <section class="project__others container space-between">
      <div class="project__prev">
        <p>Anterior</p>
        <a href="#anterior">abc</a>
      </div>
      <div class="project__next">
        <p>Próximo</p>
        <a href="#proximo">abc</a>
      </div>
    </section>
  </main>
</x-layout>
