function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const isOpen = sidebar.classList.toggle('open');
  document.body.style.overflow = isOpen ? 'hidden' : '';
}

function loadNavigation() {
  fetch('includes/nav.html')
    .then(res => {
      if (res.ok) {
        return res.text();
      }
      return fetch('../includes/nav.html').then(r => r.text());
    })
    .then(html => {
      document.getElementById('nav-container').innerHTML = html;
    });
}

document.addEventListener('DOMContentLoaded', loadNavigation);
