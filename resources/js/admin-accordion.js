const $accordionList = document.querySelectorAll('.admin__nav li');
const $content = document.querySelectorAll('.admin__content ul');

if ($accordionList.length > 0 && $content.length > 0) {
  function toggleAccordion(event) {
    event.preventDefault();

    const clickedItem = event.currentTarget;

    $accordionList.forEach((item) => {
      item.classList.remove('active');
    });

    clickedItem.classList.add('active');

    $content.forEach((content) => {
      content.classList.remove('active');
    });

    const index = Array.from($accordionList).indexOf(clickedItem);

    if (index >= 0 && index < $content.length) {
      $content[index].classList.add('active');
    }
  }

  $accordionList.forEach((item) => {
    item.addEventListener('click', toggleAccordion);
  });
}
