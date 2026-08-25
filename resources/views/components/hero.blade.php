<section id="intro" class="hero section">
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="hero-label">BSIT Student &middot; 4th Year</span>
                <h1 class="hero-name">{{ $portfolio['name'] }}</h1>
                <p class="hero-title">{{ $portfolio['tagline'] }}</p>
                <div class="hero-cta">
                    <a href="#projects" class="btn btn-primary"><i class="fas fa-code"></i> View Projects</a>
                    <a href="#contact" class="btn btn-ghost"><i class="fas fa-paper-plane"></i> Get in Touch</a>
                </div>
            </div>
            <div class="hero-photo">
                <div class="hero-photo-ring">
                    <img class="hero-photo-img" src="{{ asset('images/profile.jpg') }}?v={{ filemtime(public_path('images/profile.jpg')) }}" alt="Profile photo of {{ $portfolio['name'] }}">
                </div>
            </div>
        </div>
    </div>
</section>
