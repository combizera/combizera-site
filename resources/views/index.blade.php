<x-layout title="Ygor Combi | Product Manager">
  <main class="index bg-pattern" style="--icon-url:url('{{ Vite::image('icons/pattern-dot.svg') }}')">

    {{-- HERO --}}
    <section id="hero" class="hero container grid-2">
      <div class="flex-column">
        <div class="hero__tit">
          <img src="{{ Vite::image('icons/icon-looping.svg') }}" alt="Elemento Auxiliar - Looping" class="absolute">
          <h1>&lt;combi<wbr><span class="bold-italic">z</span>era/&gt;</h1>
        </div>
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
    <section id="projetos" class="bg-white projects">
      <div class="container">
        <h2>Projetos</h2>
        <nav>
          <ul class="ul projects__list flex-column">
            {{-- BRASIL JÁ --}}
            <li class="border-card grid-2 projects__item bg-pattern">
              <div class="projects__img">
                <img loading="lazy" src="{{ Vite::image('mockup-brasil-ja.png') }}" alt="Mockup - Projeto Brasil Já" />
              </div>
              <div class="projects__txt flex-column">
                <span class="subtit">Uma revista <strong>brasileira</strong> no mundo</span>
                <h5 class="h5">Brasil Já</h5>
                <p>
                  Neste projeto participei ativamente de todas as etapas da construção, tanto do site, como do sistema de leitura da Revista Brasil Já em parceria com o Jhonatan David.
                  <br><br>
                  Sistema desenvolvido em Laravel, com paywall, integrações com meios de pagamento (feito através de Stripe) e diversos outros pormenores.
                </p>
                <ul class="ul projects__icons grid-3">
                  <li>
                    <span class="material-symbols-outlined">
                      animation
                    </span>
                    <h6 class="h6">Animações</h6>
                    <p>Utilização da Biblioteca GSAP para animações e interações no site</p>
                  </li>
                  <li>
                    <span class="material-symbols-outlined">
                      smart_toy
                    </span>
                    <h6 class="h6">SEO</h6>
                    <p>Estruturação do projeto com foco na otimização do SEO</p>
                  </li>
                  <li>
                    <span class="material-symbols-outlined">
                      responsive_layout
                    </span>
                    <h6 class="h6">Web</h6>
                    <p>Projeto web totalmente responsivo</p>
                  </li>
                </ul>
                <a href="#projeto-1" class="btn btn-pri">Ver Projeto</a>
              </div>
            </li>

            {{-- BILIOTECA DE PADRÕES --}}
            <li class="border-card grid-2 projects__item bg-pattern">
              <div class="projects__img">
                <img loading="lazy" src="{{ Vite::image('mockup-advbox.png') }}" alt="Mockup - Projeto Biblioteca de Padrões" />
              </div>
              <div class="projects__txt flex-column">
                <span class="subtit">Documentação & <strong>Intranet</strong></span>
                <h5 class="h5">Biblioteca de Padrões</h5>
                <p>
                  Projeto de redesign do site e reestruturação do SEO.
                  <br><br>
                  Desenvolvido em parceria com a talentosíssima Carol (que cuidou da parte de UI e pesquisa). Fiquei responsável pelo SEO e codificação deste projeto, optamos por seguir com WordPress, devido ao prévio conhecimento da ferramenta que o time de Marketing do escritório já tinha.
                </p>
                <ul class="ul projects__icons grid-3">
                  <li>
                    <span class="material-symbols-outlined">
                      animation
                    </span>
                    <h6 class="h6">Animações</h6>
                    <p>Utilização da Biblioteca GSAP para animações e interações no site</p>
                  </li>
                  <li>
                    <span class="material-symbols-outlined">
                      smart_toy
                    </span>
                    <h6 class="h6">SEO</h6>
                    <p>Estruturação do projeto com foco na otimização do SEO</p>
                  </li>
                  <li>
                    <span class="material-symbols-outlined">
                      responsive_layout
                    </span>
                    <h6 class="h6">Web</h6>
                    <p>Projeto web totalmente responsivo</p>
                  </li>
                </ul>
                <a href="#projeto-1" class="btn btn-pri">Ver Projeto</a>
              </div>
            </li>

            {{-- SOUSA ADVOGADOS --}}
            <li class="border-card grid-2 projects__item bg-pattern">
              <div class="projects__img">
                <img loading="lazy" src="{{ Vite::image('mockup-teste.png') }}" alt="Mockup - Projeto Brasil Já" />
              </div>
              <div class="projects__txt flex-column">
                <span class="subtit">Ajudando a <strong>#transformudar</strong> vidas</span>
                <h5 class="h5">Sousa Advogados</h5>
                <p>
                  Projeto de redesign do site e reestruturação do SEO.
                  <br><br>
                  Desenvolvido em parceria com a talentosíssima Carol (que cuidou da parte de UI e pesquisa). Fiquei responsável pelo SEO e codificação deste projeto, optamos por seguir com WordPress, devido ao prévio conhecimento da ferramenta que o time de Marketing do escritório já tinha.
                </p>
                <ul class="ul projects__icons grid-3">
                  <li>
                    <span class="material-symbols-outlined">
                      animation
                    </span>
                    <h6 class="h6">Animações</h6>
                    <p>Utilização da Biblioteca GSAP para animações e interações no site</p>
                  </li>
                  <li>
                    <span class="material-symbols-outlined">
                      smart_toy
                    </span>
                    <h6 class="h6">SEO</h6>
                    <p>Estruturação do projeto com foco na otimização do SEO</p>
                  </li>
                  <li>
                    <span class="material-symbols-outlined">
                      responsive_layout
                    </span>
                    <h6 class="h6">Web</h6>
                    <p>Projeto web totalmente responsivo</p>
                  </li>
                </ul>
                <a href="#projeto-1" class="btn btn-pri">Ver Projeto</a>
              </div>
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
    <section id="depoimentos" class="depo container">
      <h2>Depoi<wbr>mentos</h2>
      <x-depoimentos.index :depoimentos="$depoimentos" />

    </section>

    {{-- SKILLS --}}
    <section id="skills" class="skills container">
      <x-skills.index :skills="$skills"></x-skills.index>
    </section>
  </main>
</x-layout>
