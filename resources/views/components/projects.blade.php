<section id="projects" class="projects section">
    <div class="container">
        <span class="section-label reveal">Work</span>
        <h2 class="section-heading reveal">Projects Showcase</h2>
        <p class="section-sub reveal">A selection of management systems I have developed as part of my coursework.</p>

        <div class="project-grid">
            @foreach($portfolio['projects'] as $index => $project)
            <div class="project-card glass reveal" style="transition-delay:{{ $index * 0.12 }}s">
                <div class="project-cover">
                    <span class="project-num">PROJECT {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <img src="{{ asset($project['cover']) }}" alt="{{ $project['title'] }} — {{ $project['screenshots'][0]['label'] }} screen">
                    <div class="project-cover-overlay">
                        <button class="btn btn-primary project-gallery-btn"
                            data-project="{{ $index }}"
                            aria-label="View {{ $project['title'] }} gallery">
                            <i class="fas fa-images"></i> View Gallery
                        </button>
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <span class="project-lang">{{ $project['language'] }}</span>
                    <p class="project-desc">{{ $project['description'] }}</p>
                    <button class="btn btn-ghost project-gallery-btn"
                        data-project="{{ $index }}"
                        aria-label="View {{ $project['title'] }} gallery">
                        <i class="fas fa-expand"></i> View Project Gallery
                    </button>
                </div>
            </div>
            @endforeach
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
