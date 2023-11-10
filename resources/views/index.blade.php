<x-layout>
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
          <img src="{{ Vite::image('ygor-combi.png') }}" alt="Foto do Ygor Combi" />
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

    </main>
</x-layout>
