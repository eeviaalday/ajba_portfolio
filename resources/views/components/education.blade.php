<section id="education" class="edu section">
    <div class="container">
        <span class="section-label reveal">Journey</span>
        <h2 class="section-heading reveal">Educational Background</h2>
        <p class="section-sub reveal">My academic path and the milestones that shaped my technical foundation.</p>

        <div class="edu-track">
            @foreach($portfolio['education'] as $index => $edu)
            <div class="edu-item reveal" style="transition-delay:{{ $index * 0.12 }}s">
                <div class="edu-dot {{ ($edu['status'] ?? '') === 'current' ? 'edu-dot--current' : '' }}"></div>
                <div class="edu-card glass {{ ($edu['status'] ?? '') === 'current' ? 'edu-card--current' : '' }}">
                    <div class="edu-header">
                        <span class="edu-year">{{ $edu['year'] }}</span>
                        @if(($edu['status'] ?? '') === 'current')
                        <span class="edu-badge edu-badge--current">Current</span>
                        @endif
                    </div>
                    <h3 class="edu-degree">{{ $edu['degree'] }}</h3>
                    <p class="edu-school">{{ $edu['school'] }}</p>
                    <p class="edu-desc">{{ $edu['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
