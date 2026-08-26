/* ============================================================
   CONSTELLATION CANVAS — Digital Universe Background
   ============================================================ */
(function () {
  const canvas = document.createElement('canvas');
  canvas.id = 'constellation-canvas';
  Object.assign(canvas.style, {
    position: 'fixed', inset: '0', width: '100%', height: '100%',
    zIndex: '0', pointerEvents: 'none'
  });
  document.body.prepend(canvas);

  const ctx = canvas.getContext('2d');
  let w, h, stars = [], mouse = { x: -1000, y: -1000 };
  let prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  }

  function createStars() {
    const count = Math.min(Math.floor((w * h) / 8000), 120);
    stars = [];
    for (let i = 0; i < count; i++) {
      stars.push({
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 1.8 + 0.4,
        dx: (Math.random() - 0.5) * 0.3,
        dy: (Math.random() - 0.5) * 0.3,
        twinkle: Math.random() * Math.PI * 2,
        twinkleSpeed: Math.random() * 0.02 + 0.008
      });
    }
  }

  function getAccentHSL() {
    const style = getComputedStyle(document.documentElement);
    const h = style.getPropertyValue('--accent-h').trim() || '260';
    const s = style.getPropertyValue('--accent-s').trim() || '60%';
    const l = style.getPropertyValue('--accent-l').trim() || '70%';
    return { h: parseFloat(h), s, l };
  }

  function draw() {
    const theme = document.documentElement.dataset.theme || 'dark';
    const accent = getAccentHSL();
    ctx.clearRect(0, 0, w, h);

    const lineAlpha = theme === 'dark' ? 0.12 : 0.06;
    const starAlpha = theme === 'dark' ? 0.7 : 0.35;
    const mouseRadius = theme === 'dark' ? 160 : 120;

    // Update & draw stars
    for (const s of stars) {
      if (!prefersReduced) {
        s.x += s.dx;
        s.y += s.dy;
        s.twinkle += s.twinkleSpeed;
        if (s.x < -10) s.x = w + 10;
        if (s.x > w + 10) s.x = -10;
        if (s.y < -10) s.y = h + 10;
        if (s.y > h + 10) s.y = -10;
      }

      const alpha = starAlpha * (0.5 + 0.5 * Math.sin(s.twinkle));
      ctx.beginPath();
      ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
      ctx.fillStyle = `hsla(${accent.h}, 60%, 80%, ${alpha})`;
      ctx.fill();
    }

    // Draw constellation lines
    for (let i = 0; i < stars.length; i++) {
      for (let j = i + 1; j < stars.length; j++) {
        const dx = stars[i].x - stars[j].x;
        const dy = stars[i].y - stars[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        const maxDist = 140;
        if (dist < maxDist) {
          const alpha = lineAlpha * (1 - dist / maxDist);
          ctx.beginPath();
          ctx.moveTo(stars[i].x, stars[i].y);
          ctx.lineTo(stars[j].x, stars[j].y);
          ctx.strokeStyle = `hsla(${accent.h}, 50%, 65%, ${alpha})`;
          ctx.lineWidth = 0.5;
          ctx.stroke();
        }
      }
    }

    // Draw mouse glow
    const dxm = mouse.x;
    const dym = mouse.y;
    if (dxm > 0 && dym > 0) {
      for (const s of stars) {
        const dx = s.x - dxm;
        const dy = s.y - dym;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < mouseRadius) {
          const alpha = 0.4 * (1 - dist / mouseRadius);
          ctx.beginPath();
          ctx.moveTo(s.x, s.y);
          ctx.lineTo(dxm, dym);
          ctx.strokeStyle = `hsla(${accent.h}, 70%, 70%, ${alpha})`;
          ctx.lineWidth = 0.8;
          ctx.stroke();
        }
      }
    }

    requestAnimationFrame(draw);
  }

  resize();
  createStars();
  draw();

  window.addEventListener('resize', () => { resize(); createStars(); });
  document.addEventListener('mousemove', (e) => { mouse.x = e.clientX; mouse.y = e.clientY; });
  document.addEventListener('mouseleave', () => { mouse.x = -1000; mouse.y = -1000; });
})();
