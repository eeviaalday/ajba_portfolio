<section id="about" class="about section">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual reveal">
                <div class="about-deco about-deco-1"></div>
                <div class="about-deco about-deco-2"></div>
                <div class="about-img-wrap">
                    <img class="about-img" src="{{ asset('images/profile.jpg') }}?v={{ filemtime(public_path('images/profile.jpg')) }}" alt="Photo of {{ $portfolio['name'] }}">
                </div>
                <a href="{{ asset('files/Alday Resume.pdf') }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary about-resume-btn">
                    <i class="fas fa-file-pdf"></i> View Resume
                </a>
                <button type="button" class="btn btn-ghost about-gallery-btn" id="about-gallery-btn">
                    <i class="fas fa-images"></i> View My Gallery
                </button>
            </div>
            <div class="about-content reveal" style="transition-delay:.15s">
                <span class="section-label">About Me</span>
                <h2 class="section-heading">A Little Bit About<br><span class="accent">Myself</span></h2>
                <div class="about-text">
                    <p>{{ $portfolio['bio'] }}</p>
                    <p>{{ $portfolio['bio_extra'] }}</p>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">Video Editing</span>
                    <span class="skill-tag">Computer Troubleshooting</span>
                    <span class="skill-tag">Network Configuration</span>
                    <span class="skill-tag">Technical Instruction</span>
                    <span class="skill-tag">Leadership</span>
                    <span class="skill-tag">Problem Solving</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- My Gallery Modal -->
<div class="gallery-modal about-gallery-modal" id="about-gallery-modal" role="dialog" aria-modal="true" aria-label="My Gallery" hidden>
    <div class="gallery-backdrop" id="about-gallery-backdrop"></div>
    <div class="gallery-content about-gallery-content">
        <div class="gallery-header about-gallery-header">
            <h3 class="gallery-title" id="about-gallery-title">My Gallery</h3>
            <button class="gallery-close" id="about-gallery-close" aria-label="Close gallery">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="gallery-body">
            <button class="gallery-nav gallery-prev" id="about-gallery-prev" aria-label="Previous photo">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="gallery-image-wrap about-gallery-image-wrap">
                <img class="gallery-image about-gallery-image" id="about-gallery-image" src="" alt="">
            </div>
            <button class="gallery-nav gallery-next" id="about-gallery-next" aria-label="Next photo">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="gallery-footer about-gallery-footer">
            <span class="gallery-label" id="about-gallery-caption"></span>
            <span class="gallery-counter" id="about-gallery-counter"></span>
        </div>
    </div>
</div>

<script>
window.__myGallery = @json($portfolio['gallery']);
</script>
