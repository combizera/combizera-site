<x-layout title="Ygor Combi | Product Manager">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">

    {{-- HERO --}}
    <section id="hero" class="hero container grid-2">
      <div class="flex-column">
        <h1>&lt;combi<span class="bold-italic">z</span>era/&gt;</h1>
        <div class="hero__txt">
          <h2>
            Líder Operacional na
            <a href="https://advbox.com.br/software-juridico" target="_blank">
              ADVBOX
            </a>
          </h2>
          <p>Gosto de navegar por diferentes áreas. Durante meu mestrado em Educação, decide mudar complemente e comecei a fazer sites, desde então já estudei vendas, UI, UX, marketing digital.</p>
          <div class="btns">
            <a href="#projects" class="btn btn-pri">Veja os Projetos</a>
            <a href="#contato" class="btn btn-sec">Contato</a>
          </div>
        </div>
      </div>
      <div class="hero__img">
        <img class="border-card" src="{{ Vite::image('ygor-combi.png') }}" alt="Foto do Ygor Combi" />
        <img class="absolute rotate" src="{{ Vite::image('icons/icon-asterisco.svg') }}" alt="Elemento Auxiliar - Asterisco" />
      </div>
    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="bg-white projects">
      <div class="container">
        <h2>Projetos</h2>
        <nav>
          <ul class="ul grid-3">
            <li class="border-card">
              <a href="">
                <div class="projects__img">
                  <img src="{{ Vite::image('works/bortoluzzi.png') }}" alt="Projeto da Bortoluzzi Advocacia" />
                </div>
                <div class="projects__txt">
                  <span>Bortoluzzi Advocacia</span>
                  <p>Projeto desenvolvido para o evento anual da ADVBOX. Sistema em Laravel e com integração com Stripe.</p>
                </div>
              </a>
            </li>
            <li class="border-card">
              <a href="">
                <div class="projects__img">
                  <img src="{{ Vite::image('works/bortoluzzi.png') }}" alt="Projeto da Bortoluzzi Advocacia" />
                </div>
                <div class="projects__txt">
                  <span>Bortoluzzi Advocacia</span>
                  <p>Projeto desenvolvido para o evento anual da ADVBOX. Sistema em Laravel e com integração com Stripe.</p>
                </div>
              </a>
            </li>
            <li class="border-card">
              <a href="">
                <div class="projects__img">
                  <img src="{{ Vite::image('works/bortoluzzi.png') }}" alt="Projeto da Bortoluzzi Advocacia" />
                </div>
                <div class="projects__txt">
                  <span>Bortoluzzi Advocacia</span>
                  <p>Projeto desenvolvido para o evento anual da ADVBOX. Sistema em Laravel e com integração com Stripe.</p>
                </div>
              </a>
            </li>
          </ul>
        </nav>
        <div class="center">
          <a href="#" class="btn btn-pri">Veja todos projetos</a>
        </div>
      </div>
    </section>

    {{-- TAGS --}}
    <section class="features border">
      <x-tags.index :tags="$tags"></x-tag>
    </section>

    {{-- DEPOIMENTOS --}}
    <section id="testimonials" class="depo container">
      <h2>Depoimentos</h2>
      <ul class="grid-3 ul">
        <li class="border-card">
          <img src="{{ Vite::image('/logos/logo-advbox.svg') }}" alt="Logotipo da ADVBOX" />
          <p class="depo__depo">Ygor é um profissional de excelência. Além de ser muito atencioso, é extremamente dedicado a ouvir as necessidades dos clientes e busca sempre atendê-las com o maior cuidado possível. Profissional nota 10!</p>
          <div class="depo__profile">
            <img src="{{ Vite::image('ygor-combi.png') }}" alt="Foto do Ygor Combi" />
            <div>
              <p>Laís Alves</p>
              <span>Customer Success</span>
            </div>
          </div>
        </li>
        <li class="border-card">
          <img src="{{ Vite::image('/logos/logo-advbox.svg') }}" alt="Logotipo da ADVBOX" />
          <p class="depo__depo">Ygor é um profissional de excelência. Além de ser muito atencioso, é extremamente dedicado a ouvir as necessidades dos clientes e busca sempre atendê-las com o maior cuidado possível. Profissional nota 10!</p>
          <div class="depo__profile">
            <img src="{{ Vite::image('ygor-combi.png') }}" alt="Foto do Ygor Combi" />
            <div>
              <p>Laís Alves</p>
              <span>Customer Success</span>
            </div>
          </div>
        </li>
        <li class="border-card">
          <img src="{{ Vite::image('/logos/logo-advbox.svg') }}" alt="Logotipo da ADVBOX" />
          <p class="depo__depo">Ygor é um profissional de excelência. Além de ser muito atencioso, é extremamente dedicado a ouvir as necessidades dos clientes e busca sempre atendê-las com o maior cuidado possível. Profissional nota 10!</p>
          <div class="depo__profile">
            <img src="{{ Vite::image('ygor-combi.png') }}" alt="Foto do Ygor Combi" />
            <div>
              <p>Laís Alves</p>
              <span>Customer Success</span>
            </div>
          </div>
        </li>
      </ul>
    </section>

    {{-- SKILLS --}}
    <section id="skills" class="skills container">
      <h2 class="h2">Skills</h2>

      {{-- SOFT --}}
      <article>
        <h4 class="h4">Soft Skills</h4>
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
    </section>
  </main>
</x-layout>
