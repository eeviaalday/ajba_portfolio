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
      if (certViewer && !certViewer.hidden) closeCertViewer();
    }
    if (galleryModal && !galleryModal.hidden) {
      if (e.key === 'ArrowLeft')  galleryPrev?.click();
      if (e.key === 'ArrowRight') galleryNext?.click();
    }
    if (certViewer && !certViewer.hidden) {
      if (e.key === 'ArrowLeft')  certPrev?.click();
      if (e.key === 'ArrowRight') certNext?.click();
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
     CERTIFICATE VIEWER
     -------------------------------------------------------- */
  const certs          = window.__certificates || [];
  const certViewer     = document.getElementById('cert-viewer');
  const certBackdrop   = document.getElementById('cert-viewer-backdrop');
  const certClose      = document.getElementById('cert-viewer-close');
  const certPrev       = document.getElementById('cert-viewer-prev');
  const certNext       = document.getElementById('cert-viewer-next');
  const certImage      = document.getElementById('cert-viewer-image');
  const certTitle      = document.getElementById('cert-viewer-title');
  const certIssuer     = document.getElementById('cert-viewer-issuer');
  const certLabel      = document.getElementById('cert-viewer-label');
  const certCounter    = document.getElementById('cert-viewer-counter');
  const certPdf        = document.getElementById('cert-viewer-pdf');

  let certCurrentIdx = 0;

  function openCertViewer(index) {
    certCurrentIdx = index;
    updateCertViewer();
    certViewer.hidden = false;
    document.body.style.overflow = 'hidden';
  }

  function closeCertViewer() {
    certViewer.hidden = true;
    document.body.style.overflow = '';
  }

  function updateCertViewer() {
    const cert = certs[certCurrentIdx];
    if (!cert) return;
    certImage.src = window.__assetBase + cert.image;
    certImage.alt = cert.title + ' certificate';
    certTitle.textContent = cert.title;
    certIssuer.textContent = cert.issuer;
    certLabel.textContent = cert.title;
    certCounter.textContent = (certCurrentIdx + 1) + ' / ' + certs.length;
    if (cert.pdf) {
      certPdf.href = window.__assetBase + cert.pdf;
      certPdf.style.display = '';
    } else {
      certPdf.style.display = 'none';
    }
  }

  document.querySelectorAll('.cert-artifact').forEach(artifact => {
    artifact.addEventListener('click', () => {
      openCertViewer(parseInt(artifact.dataset.cert, 10));
    });
  });

  certClose?.addEventListener('click', closeCertViewer);
  certBackdrop?.addEventListener('click', closeCertViewer);
  document.querySelector('.cert-viewer-content')?.addEventListener('click', (e) => e.stopPropagation());

  certPrev?.addEventListener('click', () => {
    certCurrentIdx = (certCurrentIdx - 1 + certs.length) % certs.length;
    updateCertViewer();
  });

  certNext?.addEventListener('click', () => {
    certCurrentIdx = (certCurrentIdx + 1) % certs.length;
    updateCertViewer();
  });

  let certTouchStartX = 0;
  certViewer?.addEventListener('touchstart', (e) => {
    certTouchStartX = e.changedTouches[0].screenX;
  }, { passive: true });
  certViewer?.addEventListener('touchend', (e) => {
    const diff = certTouchStartX - e.changedTouches[0].screenX;
    if (Math.abs(diff) > 50) {
      if (diff > 0) certNext?.click();
      else certPrev?.click();
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
