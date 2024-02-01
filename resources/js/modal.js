const $adminLi = document.querySelectorAll('.admin__item');
const $modal = document.querySelector('.modal__wrapper');
const $modalForm = $modal.querySelector('form');
const $modalClose = $modal.querySelectorAll('.modal__close');

$adminLi.forEach(function(item){
  const $deleteButton = item.querySelector('.delete');
  $deleteButton.addEventListener("click", function(){
    $modal.classList.add('active');
    $modalForm.action = item.dataset.route;
  });
});

$modalClose.forEach(function(closeButton){
  closeButton.addEventListener("click", function(){
    $modal.classList.remove('active');
  });
});

document.addEventListener("keydown", function(event){
  if(event.key == "Escape"){
    $modal.classList.remove('active');
  }
});

// Adiciona um evento de clique no elemento que envolve o modal
$modal.addEventListener("click", function(event){
  // Se o clique ocorrer fora do conteúdo do modal, fecha o modal
  if(event.target === $modal){
    $modal.classList.remove('active');
  }
});
