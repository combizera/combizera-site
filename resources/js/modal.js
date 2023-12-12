const $adminLi = document.querySelectorAll('.admin__item');
const $modal = document.querySelector('.modal__wrapper');

const $modalForm = $modal.querySelector('form');
const $modalClose = $modal.querySelector('.modal__close');

$adminLi.forEach(function(item){
  const $deleteButton = item.querySelector('.delete');
  $deleteButton.addEventListener("click", function(){
    $modal.classList.add('active');
    $modalForm.action = item.dataset.route;
  })
})

$modalClose.addEventListener("click", function(){
  $modal.classList.remove('active');
})

document.addEventListener("keydown", function(event){
  if(event.key == "Escape"){
    $modal.classList.remove('active');
  };
})
