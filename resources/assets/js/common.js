import SmoothScroll from 'smooth-scroll';
const scroll = new SmoothScroll('a[data-scroll]', { header: '.navbar' });

// Toggle Bootstrap menu without jQuery
const toggler = document.getElementsByClassName('navbar-toggler')[0];
const collapse = document.getElementsByClassName('navbar-collapse')[0];

function toggleMenu () {
  collapse.classList.toggle('collapse');
  collapse.classList.toggle('in');
}

function closeMenusOnResize () {
  if (document.body.clientWidth >= 768) {
    collapse.classList.add('collapse');
    collapse.classList.remove('in');
  }
}

window.addEventListener('resize', closeMenusOnResize, false);
toggler.addEventListener('click', toggleMenu, false);

// Scroll
function onScroll () {
  const scroll = window.scrollY;
  const body = document.getElementsByTagName('body')[0];

  if (scroll > 0) {
    body.classList.add('scrolled');
  } else {
    body.classList.remove('scrolled');
  }
}

window.addEventListener('scroll', onScroll);
