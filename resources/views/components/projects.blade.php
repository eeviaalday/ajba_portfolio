<section id="projects" class="projects section">
    <div class="container">
        <div class="projects-header">
            <span class="section-label reveal">Work</span>
            <h2 class="section-heading reveal">I Make Incredible<br><span class="accent">Projects</span></h2>
            <p class="section-sub reveal">A selection of management systems I have developed as part of my coursework.</p>
        </div>

        @foreach($portfolio['projects'] as $index => $project)
        <div class="project-feature reveal" style="transition-delay:{{ $index * 0.1 }}s">
            <div class="project-feature-info">
                <div class="project-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                <h3 class="project-title">{{ $project['title'] }}</h3>
                <span class="project-lang">{{ $project['language'] }}</span>
                <p class="project-desc">{{ $project['description'] }}</p>
                <button class="btn btn-primary project-gallery-btn"
                    data-project="{{ $index }}"
                    aria-label="View {{ $project['title'] }} gallery">
                    <i class="fas fa-images"></i> View Gallery
                </button>
            </div>
            <div class="project-img-wrap" data-project="{{ $index }}">
                <img src="{{ asset($project['cover']) }}" alt="{{ $project['title'] }} — {{ $project['screenshots'][0]['label'] }} screen">
                <div class="project-img-overlay">
                    <button class="btn btn-primary project-gallery-btn"
                        data-project="{{ $index }}"
                        aria-label="View {{ $project['title'] }} gallery">
                        <i class="fas fa-expand"></i> View Gallery
                    </button>
                </div>
            </div>
        </div>
        @endforeach

        <div class="projects-more reveal">
            <a href="#more-projects" class="btn btn-primary">
                <i class="fas fa-arrow-down"></i> View More Projects
            </a>
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div class="gallery-modal" id="gallery-modal" role="dialog" aria-modal="true" aria-label="Project gallery" hidden>
    <div class="gallery-backdrop" id="gallery-backdrop"></div>
    <div class="gallery-content">
        <div class="gallery-header">
            <div>
                <h3 class="gallery-title" id="gallery-title"></h3>
                <span class="gallery-lang" id="gallery-lang"></span>
            </div>
            <button class="gallery-close" id="gallery-close" aria-label="Close gallery">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="gallery-body">
            <button class="gallery-nav gallery-prev" id="gallery-prev" aria-label="Previous screenshot">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="gallery-image-wrap">
                <img class="gallery-image" id="gallery-image" src="" alt="">
            </div>
            <button class="gallery-nav gallery-next" id="gallery-next" aria-label="Next screenshot">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="gallery-footer">
            <span class="gallery-label" id="gallery-label"></span>
            <span class="gallery-counter" id="gallery-counter"></span>
        </div>
    </div>
</div>

<script>
window.__projects = @json($portfolio['projects']);
window.__assetBase = '{{ url('/') }}/';
</script>
