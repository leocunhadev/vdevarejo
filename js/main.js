// VdeVAREJO - JavaScript
document.addEventListener('DOMContentLoaded', function () {
  console.log('VdeVAREJO carregado com sucesso!');

  // Smooth scroll para links internos
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');
  const path = btn.querySelector('path');

  const iconHamburger = "M4 6h16M4 12h16m-7 6h7";
  const iconClose = "M6 18L18 6M6 6l12 12";
  let isOpen = false;

  btn.addEventListener('click', () => {
    console.log('Menu Clicado!');
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');

    isOpen = !isOpen;
    if (isOpen) {
      path.setAttribute('d', iconClose);
    } else {
      path.setAttribute('d', iconHamburger);
    }
  });
});
