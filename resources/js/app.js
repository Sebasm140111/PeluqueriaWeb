import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
if (typeof window !== 'undefined') {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('revealed');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
  });
}
