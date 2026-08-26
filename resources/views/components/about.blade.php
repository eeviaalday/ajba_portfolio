<section id="about" class="about section">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual reveal">
                <div class="about-card glass">
                    <span class="section-label">About Me</span>
                    <h2 class="section-heading">A Little Bit About<br>Myself</h2>
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
            <div class="about-visual reveal" style="transition-delay:.15s">
                <div class="about-card glass about-profile">
                    <img class="about-profile-img" src="{{ asset('images/profile.jpg') }}?v={{ filemtime(public_path('images/profile.jpg')) }}" alt="Photo of {{ $portfolio['name'] }}">
                    <h3 class="about-profile-name">{{ $portfolio['name'] }}</h3>
                    <p class="about-profile-title">{{ $portfolio['title'] }}</p>
                    <div class="about-profile-tags">
                        <span class="skill-tag">Sta. Rosa, Bangued, Abra</span>
                        <span class="skill-tag">{{ $portfolio['email'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
