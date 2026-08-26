/* ============================================================
   MAIN.JS — Editorial Portfolio
   ============================================================ */
document.addEventListener('DOMContentLoaded', () => {

  const html = document.documentElement;

  /* --------------------------------------------------------
     PROJECT GALLERY MODAL
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
     CERTIFICATE CAROUSEL
     -------------------------------------------------------- */
  const certSlides   = document.getElementById('cert-slides');
  const certCurrent  = document.getElementById('cert-current');
  const certPrevBtn  = document.getElementById('cert-prev');
  const certNextBtn  = document.getElementById('cert-next');
  const certDots     = document.querySelectorAll('.cert-dot');
  const certs        = window.__certificates || [];
  let certIndex      = 0;
  const certTotal    = certs.length;

  function updateCertCarousel() {
    if (!certSlides) return;
    certSlides.style.transform = `translateX(-${certIndex * 100}%)`;
    if (certCurrent) certCurrent.textContent = String(certIndex + 1).padStart(2, '0');
    certDots.forEach((d, i) => d.classList.toggle('active', i === certIndex));
  }

  certPrevBtn?.addEventListener('click', () => {
    certIndex = (certIndex - 1 + certTotal) % certTotal;
    updateCertCarousel();
  });

  certNextBtn?.addEventListener('click', () => {
    certIndex = (certIndex + 1) % certTotal;
    updateCertCarousel();
  });

  certDots.forEach(dot => {
    dot.addEventListener('click', () => {
      certIndex = parseInt(dot.dataset.index, 10);
      updateCertCarousel();
    });
  });

  // Touch/swipe for carousel
  let certTouchStartX = 0;
  const certCarousel = document.getElementById('cert-carousel');
  certCarousel?.addEventListener('touchstart', (e) => {
    certTouchStartX = e.changedTouches[0].screenX;
  }, { passive: true });
  certCarousel?.addEventListener('touchend', (e) => {
    const diff = certTouchStartX - e.changedTouches[0].screenX;
    if (Math.abs(diff) > 50) {
      if (diff > 0) certNextBtn?.click();
      else certPrevBtn?.click();
    }
  }, { passive: true });

  /* --------------------------------------------------------
     CERTIFICATE VIEWER MODAL
     -------------------------------------------------------- */
  const certViewer     = document.getElementById('cert-viewer');
  const certBackdrop   = document.getElementById('cert-viewer-backdrop');
  const certClose      = document.getElementById('cert-viewer-close');
  const certVPrev      = document.getElementById('cert-viewer-prev');
  const certVNext      = document.getElementById('cert-viewer-next');
  const certVImage     = document.getElementById('cert-viewer-image');
  const certVTitle     = document.getElementById('cert-viewer-title');
  const certVIssuer    = document.getElementById('cert-viewer-issuer');
  const certVLabel     = document.getElementById('cert-viewer-label');
  const certVCounter   = document.getElementById('cert-viewer-counter');
  const certVPdf       = document.getElementById('cert-viewer-pdf');

  let certViewIdx = 0;

  function openCertViewer(index) {
    certViewIdx = index;
    updateCertViewer();
    certViewer.hidden = false;
    document.body.style.overflow = 'hidden';
  }

  function closeCertViewer() {
    certViewer.hidden = true;
    document.body.style.overflow = '';
  }

  function updateCertViewer() {
    const cert = certs[certViewIdx];
    if (!cert) return;
    certVImage.src = window.__assetBase + cert.image;
    certVImage.alt = cert.title + ' certificate';
    certVTitle.textContent = cert.title;
    certVIssuer.textContent = cert.issuer;
    certVLabel.textContent = cert.title;
    certVCounter.textContent = (certViewIdx + 1) + ' / ' + certTotal;
    if (cert.pdf) {
      certVPdf.href = window.__assetBase + cert.pdf;
      certVPdf.style.display = '';
    } else {
      certVPdf.style.display = 'none';
    }
  }

  document.querySelectorAll('.cert-card').forEach(card => {
    card.addEventListener('click', () => {
      openCertViewer(parseInt(card.dataset.cert, 10));
    });
  });

  certClose?.addEventListener('click', closeCertViewer);
  certBackdrop?.addEventListener('click', closeCertViewer);
  document.querySelector('.cert-viewer-content')?.addEventListener('click', (e) => e.stopPropagation());

  certVPrev?.addEventListener('click', () => {
    certViewIdx = (certViewIdx - 1 + certTotal) % certTotal;
    updateCertViewer();
  });

  certVNext?.addEventListener('click', () => {
    certViewIdx = (certViewIdx + 1) % certTotal;
    updateCertViewer();
  });

  let certViewerTouchX = 0;
  certViewer?.addEventListener('touchstart', (e) => {
    certViewerTouchX = e.changedTouches[0].screenX;
  }, { passive: true });
  certViewer?.addEventListener('touchend', (e) => {
    const diff = certViewerTouchX - e.changedTouches[0].screenX;
    if (Math.abs(diff) > 50) {
      if (diff > 0) certVNext?.click();
      else certVPrev?.click();
    }
  }, { passive: true });

  /* --------------------------------------------------------
     ACCENT COLOR THEME
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
     KEYBOARD
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
      if (e.key === 'ArrowLeft')  certVPrev?.click();
      if (e.key === 'ArrowRight') certVNext?.click();
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

  /* --------------------------------------------------------
     JOURNEY TABS
     -------------------------------------------------------- */
  const journeyTabs = document.querySelectorAll('.journey-tab');
  const journeyPanels = document.querySelectorAll('.journey-content');
  journeyTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      journeyTabs.forEach(t => t.classList.remove('journey-tab--active'));
      tab.classList.add('journey-tab--active');
      const target = tab.dataset.tab;
      journeyPanels.forEach(panel => {
        const isActive = panel.dataset.content === target;
        panel.classList.toggle('journey-content--active', isActive);
        if (isActive) {
          panel.querySelectorAll('.reveal:not(.visible)').forEach(el => revealObs.observe(el));
        }
      });
    });
  });

});
