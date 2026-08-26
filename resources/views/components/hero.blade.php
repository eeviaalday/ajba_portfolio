<section id="intro" class="hero section">
    <div class="hero-bg-blob hero-bg-blob-1"></div>
    <div class="hero-bg-blob hero-bg-blob-2"></div>
    <div class="hero-bg-blob hero-bg-blob-3"></div>
    <div class="container">
        <div class="hero-inner">
            <div class="hero-text">
                <span class="hero-greeting">Hello, I'm</span>
                <h1 class="hero-name">Aivee Joy<br><span class="accent">Bañez Alday</span></h1>
                <p class="hero-tagline">{{ $portfolio['tagline'] }}</p>
                <div class="hero-cta">
                    <a href="#projects" class="btn btn-primary"><i class="fas fa-code"></i> View Projects</a>
                    <a href="#contact" class="btn btn-ghost"><i class="fas fa-paper-plane"></i> Get in Touch</a>
                </div>
                <div class="hero-social">
                    <a href="{{ $portfolio['social']['github'] }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="{{ $portfolio['social']['facebook'] }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $portfolio['social']['tiktok'] }}" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="{{ $portfolio['social']['instagram'] }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $portfolio['social']['discord'] }}" target="_blank" rel="noopener noreferrer" aria-label="Discord"><i class="fab fa-discord"></i></a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-photo-wrap">
                    <div class="hero-ring"></div>
                    <div class="hero-photo">
                        <img src="{{ asset('images/profile.jpg') }}?v={{ filemtime(public_path('images/profile.jpg')) }}" alt="Profile photo of {{ $portfolio['name'] }}">
                    </div>
                    <div class="hero-float-label">BSIT · 4th Year</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll">
        <span>Scroll</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>
