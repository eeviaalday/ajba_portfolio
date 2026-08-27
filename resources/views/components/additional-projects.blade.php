<section id="more-projects" class="more-projects section">
    <div class="container">
        <div class="more-projects-header">
            <span class="section-label reveal">More Work</span>
            <h2 class="section-heading reveal">Additional Projects<br><span class="accent">& Activities</span></h2>
            <p class="section-sub reveal">Smaller programming activities and earlier academic projects from my college journey.</p>
        </div>

        <div class="more-java-grid">
            @foreach($portfolio['additional_projects']['java'] as $index => $activity)
            <div class="more-java-card glass reveal" style="transition-delay:{{ $index * 0.08 }}s">
                <div class="more-java-img" data-lightbox="additional" data-project="{{ $index }}">
                    <img src="{{ asset($activity['image']) }}" alt="{{ $activity['title'] }}">
                    <div class="more-java-overlay">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
                <div class="more-java-info">
                    <h4 class="more-java-title">{{ $activity['title'] }}</h4>
                    <span class="more-lang-badge">{{ $activity['language'] }}</span>
                    <p class="more-java-desc">{{ $activity['description'] }}</p>
                </div>
            </div>
            @endforeach

            @php $ms = $portfolio['additional_projects']['msaccess']; @endphp
            <div class="more-java-card glass reveal" style="transition-delay:{{ count($portfolio['additional_projects']['java']) * 0.08 }}s">
                <div class="more-java-img" data-lightbox="access" data-index="0">
                    <img src="{{ asset($ms['screenshots'][0]['image']) }}" alt="{{ $ms['title'] }}">
                    <div class="more-java-overlay more-java-overlay--gallery">
                        <span class="more-gallery-hint"><i class="fas fa-images"></i> View Gallery</span>
                    </div>
                </div>
                <div class="more-java-info">
                    <h4 class="more-java-title">{{ $ms['title'] }}</h4>
                    <span class="more-lang-badge">{{ $ms['language'] }}</span>
                    <p class="more-java-desc">{{ $ms['description'] }}</p>
                    <button type="button" class="btn btn-primary more-gallery-btn" data-lightbox="access" data-index="0">
                        <i class="fas fa-images"></i> View Gallery
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Additional Projects Lightbox --}}
<div class="more-lightbox" id="more-lightbox" hidden>
    <div class="more-lightbox-backdrop" id="more-lightbox-backdrop"></div>
    <div class="more-lightbox-content">
        <div class="more-lightbox-header">
            <h3 class="more-lightbox-title" id="more-lightbox-title"></h3>
            <button class="more-lightbox-close" id="more-lightbox-close" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="more-lightbox-body">
            <button class="more-lightbox-nav more-lightbox-prev" id="more-lightbox-prev" aria-label="Previous">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="more-lightbox-image-wrap">
                <img class="more-lightbox-image" id="more-lightbox-image" src="" alt="">
            </div>
            <button class="more-lightbox-nav more-lightbox-next" id="more-lightbox-next" aria-label="Next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="more-lightbox-footer">
            <span class="more-lightbox-counter" id="more-lightbox-counter"></span>
        </div>
    </div>
</div>

<script>
window.__additionalProjects = @json($portfolio['additional_projects']);
</script>
