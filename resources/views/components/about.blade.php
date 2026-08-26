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
