/* ============================================================
   MAIN.JS — Digital Constellation Portfolio
   ============================================================ */
document.addEventListener('DOMContentLoaded', () => {

  const html = document.documentElement;

  /* --------------------------------------------------------
     PROJECT GALLERY MODAL (defined early for shared keydown)
     -------------------------------------------------------- */
  const projects = window.__projects || [];
  const galleryModal    = document.getElementById('gallery-modal');
  const galleryBackdrop = document.getElementById('gallery-backdrop');
  const galleryClose    = document.getElementById('gallery-close');
  const galleryPrev     = document.getElementById('gallery-prev');
  const galleryNext     = document.getElementById('gallery-next');
  const galleryImage    = document.getElementById('gallery-image');
  const galleryTitle    = document.getElementById('gallery-title');
  const galleryLang     = document.getElementById('gallery-lang');
  const galleryLabel    = document.getElementById('gallery-label');
  const galleryCounter  = document.getElementById('gallery-counter');

  let currentProject = null;
  let currentIndex   = 0;

  function openGallery(projectIndex) {
    currentProject = projects[projectIndex];
    if (!currentProject) return;
    currentIndex = 0;
    updateGalleryImage();
    galleryTitle.textContent = currentProject.title;
    galleryLang.textContent  = currentProject.language;
    galleryModal.hidden = false;
    document.body.style.overflow = 'hidden';
  }

  function closeGallery() {
    galleryModal.hidden = true;
    document.body.style.overflow = '';
    currentProject = null;
  }

  function updateGalleryImage() {
    if (!currentProject) return;
    const shot = currentProject.screenshots[currentIndex];
    galleryImage.src = window.__assetBase + shot.image;
    galleryImage.alt = currentProject.title + ' \u2014 ' + shot.label;
    galleryLabel.textContent = shot.label;
    galleryCounter.textContent = (currentIndex + 1) + ' / ' + currentProject.screenshots.length;
  }

  document.querySelectorAll('.project-gallery-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      openGallery(parseInt(btn.dataset.project, 10));
    });
  });

  galleryClose?.addEventListener('click', closeGallery);
  galleryBackdrop?.addEventListener('click', closeGallery);
  document.querySelector('.gallery-content')?.addEventListener('click', (e) => e.stopPropagation());

  galleryPrev?.addEventListener('click', () => {
    if (!currentProject) return;
    currentIndex = (currentIndex - 1 + currentProject.screenshots.length) % currentProject.screenshots.length;
    updateGalleryImage();
  });

  galleryNext?.addEventListener('click', () => {
    if (!currentProject) return;
    currentIndex = (currentIndex + 1) % currentProject.screenshots.length;
    updateGalleryImage();
  });

  /* --------------------------------------------------------
     LIGHT/DARK MODE
     -------------------------------------------------------- */
  const themeToggle = document.querySelector('#theme-toggle');
  const themeIcon   = document.querySelector('#theme-icon');
  const storedTheme = localStorage.getItem('theme') || 'dark';
  applyTheme(storedTheme);

  themeToggle?.addEventListener('click', () => {
    const next = html.dataset.theme === 'dark' ? 'light' : 'dark';
    applyTheme(next);
    localStorage.setItem('theme', next);
  });

  function applyTheme(mode) {
    html.dataset.theme = mode;
    if (themeIcon) {
      themeIcon.className = mode === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
      themeToggle.setAttribute('aria-label', mode === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
      themeToggle.setAttribute('title', mode === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
    }
  }

  /* --------------------------------------------------------
     ACCENT COLOR THEME (palette popover)
     -------------------------------------------------------- */
  const paletteBtn   = document.querySelector('#palette-btn');
  const palettePop   = document.querySelector('#palette-popover');
  const accentOpts   = document.querySelectorAll('.palette-opt');
  const storedAccent = localStorage.getItem('accent') || 'lavender';
  applyAccent(storedAccent);

  paletteBtn?.addEventListener('click', (e) => {
    e.stopPropagation();
    palettePop?.classList.toggle('open');
  });

  document.addEventListener('click', (e) => {
    if (palettePop && !palettePop.contains(e.target) && e.target !== paletteBtn && !paletteBtn?.contains(e.target)) {
      palettePop.classList.remove('open');
    }
  });

  accentOpts.forEach(opt => {
    opt.addEventListener('click', () => {
      applyAccent(opt.dataset.color);
      localStorage.setItem('accent', opt.dataset.color);
      palettePop?.classList.remove('open');
    });
  });

  function applyAccent(name) {
    html.dataset.accent = name;
    accentOpts.forEach(o => {
      o.classList.toggle('active', o.dataset.color === name);
    });
  }

  /* --------------------------------------------------------
     KEYBOARD: Escape closes palette + gallery
     -------------------------------------------------------- */
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      palettePop?.classList.remove('open');
      if (galleryModal && !galleryModal.hidden) closeGallery();
    }
    if (galleryModal && !galleryModal.hidden) {
      if (e.key === 'ArrowLeft')  galleryPrev?.click();
      if (e.key === 'ArrowRight') galleryNext?.click();
    }
  });

  /* --------------------------------------------------------
     TOUCH/SWIPE for gallery
     -------------------------------------------------------- */
  let touchStartX = 0;
  galleryModal?.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });
  galleryModal?.addEventListener('touchend', (e) => {
    const diff = touchStartX - e.changedTouches[0].screenX;
    if (Math.abs(diff) > 50) {
      if (diff > 0) galleryNext?.click();
      else galleryPrev?.click();
    }
  }, { passive: true });

  /* --------------------------------------------------------
     MOBILE NAV
     -------------------------------------------------------- */
  const hamburger = document.querySelector('#hamburger');
  const navLinks  = document.querySelector('#nav-links');

  hamburger?.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navLinks?.classList.toggle('open');
  });

  navLinks?.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      hamburger?.classList.remove('open');
      navLinks?.classList.remove('open');
    });
  });

  /* --------------------------------------------------------
     ACTIVE NAV LINK
     -------------------------------------------------------- */
  const sections = document.querySelectorAll('.section[id]');
  const navItems = document.querySelectorAll('.nav-links a[href^="#"]');

  function setActiveLink() {
    const scrollY = window.scrollY + 120;
    sections.forEach(sec => {
      const top = sec.offsetTop;
      const height = sec.offsetHeight;
      const id = sec.getAttribute('id');
      if (scrollY >= top && scrollY < top + height) {
        navItems.forEach(item => {
          item.classList.toggle('active', item.getAttribute('href') === `#${id}`);
        });
      }
    });
  }

  window.addEventListener('scroll', setActiveLink, { passive: true });
  setActiveLink();

  /* --------------------------------------------------------
     NAV SCROLL EFFECT
     -------------------------------------------------------- */
  const nav = document.querySelector('.nav');
  window.addEventListener('scroll', () => {
    nav?.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });

  /* --------------------------------------------------------
     SCROLL REVEAL
     -------------------------------------------------------- */
  const revealEls = document.querySelectorAll('.reveal');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealEls.forEach(el => revealObs.observe(el));

});
