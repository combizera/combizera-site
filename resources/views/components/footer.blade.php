<footer>
  <div class="footer">
    <div class="border">
      <div class="container grid-4">
        {{-- MAPA DO SITE --}}
        <div class="footer__box">
          <h6>Mapa do Site</h6>
          <nav>
            <ul class="ul">
              <li>
                <a href="#">Projetos</a>
              </li>
              <li>
                <a href="#">Sobre</a>
              </li>
              <li>
                <a href="#">Contato</a>
              </li>
              @guest
                <li>
                  <a href="/login">Login</a>
                </li>
              @endguest
            </ul>
          </nav>
        </div>

        {{-- REDES SOCIAIS --}}
        <nav class="footer__social">
          <ul class="ul grid-3">
            <li>
              <a target="_blank" href="https://instagram/combizera">
                <x-icons.insta></x-icons.insta>
                Instagram
                <svg id="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.66667 1H9M9 1V6.33333M9 1L1 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://www.linkedin.com/in/combizera/">
                <x-icons.linkedin></x-icons.linkedin>
                Linkedin
                <svg id="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.66667 1H9M9 1V6.33333M9 1L1 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <x-icons.pdf></x-icons.pdf>
                CV.pdf
                <svg id="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.66667 1H9M9 1V6.33333M9 1L1 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a target="_blank" href="http://be.net/combizera">
                <x-icons.behance></x-icons.behance>
                Behance
                <svg id="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.66667 1H9M9 1V6.33333M9 1L1 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a target="_blank" href="http://wa.me/5553999902079">
                <x-icons.zap></x-icons.zap>
                Whatsapp
                <svg id="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.66667 1H9M9 1V6.33333M9 1L1 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a target="_blank" href="mailto:ola@combizera.com">
                <x-icons.email></x-icons.email>
                Email
                <svg id="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.66667 1H9M9 1V6.33333M9 1L1 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
          </ul>
        </nav>

      <div class="footer__box">
        <h6>Contato</h6>
        <div>
          <p>Telefone</p>
          <a target="_blank" href="https://wa.me/5553999902079">+55 (53) 99990-2079</a>
        </div>
        <br>
        <div>
          <p>Email</p>
          <a target="_blank" href="mailto:ola@combizera.com">ola@combizera.com</a>
        </div>
      </div>
    </div>
  </div>
    <div class="footer__copy border">
      <p>
        Ygor Combi // {{ date('Y') }} // Todos os Direitos Reservados</p>
    </div>
  </div>
</footer>
