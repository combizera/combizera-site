<div class="modal__wrapper center">
  <div class="modal">
    <div class="modal__header border-bottom space-between">
      <p>deletar.exe</p>
      <button class="modal__close">
        <img src="{{ Vite::image('icons/icon-close.svg') }}" alt="Fechar Modal" />
      </button>
    </div>
    <div class="modal__content">
      <p class="modal__message">
        V-você tem certeza? Essa ação é irreversível
        <br>
        &emsp;😣
        <br>
        👉👈
        <br>
        &emsp;👗
        <br>
        👠👠
      </p>
      <form class="modal__form" action="" method="POST">
        {{-- Diretiva que cuida da segurança --}}
        @csrf

        @method ('DELETE')

        <div class="btns">
          <button class="btn btn-pri button-delete">
            Apagar
          </button>
          <a href="#" class="btn modal__close">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</div>
