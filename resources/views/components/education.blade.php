<section id="education" class="journey section">
    <div class="container">
        <div class="journey-header">
            <span class="section-label reveal">Journey</span>
            <h2 class="section-heading reveal">My <span class="accent">Journey</span></h2>
            <p class="section-sub reveal">A timeline of my professional experience and educational background.</p>
        </div>

        <div class="journey-tabs reveal">
            <button class="journey-tab journey-tab--active" data-tab="experience">
                <i class="fas fa-briefcase"></i> Experience
            </button>
            <button class="journey-tab" data-tab="education">
                <i class="fas fa-graduation-cap"></i> Education
            </button>
        </div>

        <!-- Work Experience -->
        <div class="journey-content journey-content--active" data-content="experience">
            @foreach($portfolio['experience'] as $index => $exp)
            <div class="journey-card glass reveal" style="transition-delay:{{ $index * 0.1 }}s">
                <div class="journey-card-header">
                    <div>
                        <h3 class="journey-card-title">{{ $exp['title'] }}</h3>
                        <p class="journey-card-subtitle">{{ $exp['company'] }}</p>
                    </div>
                    <span class="journey-card-year">{{ $exp['year'] }}</span>
                </div>
                @if($exp['type'])
                <span class="journey-card-type">{{ $exp['type'] }}</span>
                @endif
                <ul class="journey-card-list">
                    @foreach($exp['responsibilities'] as $responsibility)
                    <li>{{ $responsibility }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <!-- Education -->
        <div class="journey-content" data-content="education">
            @foreach($portfolio['education'] as $index => $edu)
            <div class="journey-card glass reveal" style="transition-delay:{{ $index * 0.1 }}s">
                <div class="journey-card-header">
                    <div>
                        <h3 class="journey-card-title">{{ $edu['degree'] }}</h3>
                        <p class="journey-card-subtitle">{{ $edu['school'] }}</p>
                    </div>
                    <span class="journey-card-year">{{ $edu['year'] }}</span>
                </div>
                @if(($edu['status'] ?? '') === 'current')
                <span class="journey-card-type journey-card-type--current">Current</span>
                @endif
                <p class="journey-card-desc">{{ $edu['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
