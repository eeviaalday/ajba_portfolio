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
                <div class="about-card glass" style="text-align:center">
                    <img src="{{ asset('images/profile.jpg') }}?v={{ filemtime(public_path('images/profile.jpg')) }}" alt="Photo of {{ $portfolio['name'] }}" style="width:160px;height:160px;border-radius:50%;object-fit:cover;margin:0 auto 20px;border:3px solid var(--accent);box-shadow:0 0 24px var(--glow)">
                    <h3 style="font-size:1.1rem;color:var(--text);margin-bottom:4px">{{ $portfolio['name'] }}</h3>
                    <p style="font-size:.88rem;color:var(--text-dim);margin-bottom:16px">{{ $portfolio['title'] }}</p>
                    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:8px">
                        <span class="skill-tag">Sta. Rosa, Bangued, Abra</span>
                        <span class="skill-tag">{{ $portfolio['email'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
