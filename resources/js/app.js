// Mobile navigation toggle
const toggle = document.getElementById('nav-toggle');
const menu = document.getElementById('nav-mobile');
const iconOpen = document.getElementById('icon-open');
const iconClose = document.getElementById('icon-close');

if (toggle && menu) {
  toggle.addEventListener('click', () => {
    const isOpen = !menu.classList.toggle('hidden');
    toggle.setAttribute('aria-expanded', String(isOpen));
    iconOpen.classList.toggle('hidden', isOpen);
    iconClose.classList.toggle('hidden', !isOpen);
  });
}

// Elevate header shadow on scroll
const header = document.getElementById('site-header');
if (header) {
  window.addEventListener('scroll', () => {
    header.classList.toggle('shadow-md', window.scrollY > 10);
    header.classList.toggle('shadow-sm', window.scrollY <= 10);
  }, { passive: true });
}
