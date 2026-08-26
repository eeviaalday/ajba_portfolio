<section id="certificates" class="certs section">
    <div class="container">
        <span class="section-label reveal">Achievements</span>
        <h2 class="section-heading reveal">Certifications</h2>
        <p class="section-sub reveal">Credentials earned throughout my digital journey.</p>

        <div class="cert-constellation">
            @foreach($portfolio['certificates'] as $index => $cert)
            <div class="cert-node reveal" style="transition-delay:{{ $index * 0.1 }}s">
                <div class="cert-spine">
                    <div class="cert-dot {{ $index === 0 ? 'cert-dot--first' : '' }}"></div>
                    @if(!$loop->last)
                    <div class="cert-line"></div>
                    @endif
                </div>
                <div class="cert-artifact glass" data-cert="{{ $index }}">
                    <div class="cert-preview">
                        <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }} certificate" loading="lazy">
                        <div class="cert-preview-glow"></div>
                    </div>
                    <div class="cert-info">
                        <span class="cert-issuer">{{ $cert['issuer'] }}</span>
                        <h3 class="cert-title">{{ $cert['title'] }}</h3>
                        @if($cert['date'])
                        <span class="cert-date">{{ $cert['date'] }}</span>
                        @endif
                        @if($cert['description'])
                        <p class="cert-desc">{{ $cert['description'] }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Certificate Viewer Modal -->
<div class="cert-viewer" id="cert-viewer" role="dialog" aria-modal="true" aria-label="Certificate viewer" hidden>
    <div class="cert-viewer-backdrop" id="cert-viewer-backdrop"></div>
    <div class="cert-viewer-content">
        <div class="cert-viewer-header">
            <div>
                <h3 class="cert-viewer-title" id="cert-viewer-title"></h3>
                <span class="cert-viewer-issuer" id="cert-viewer-issuer"></span>
            </div>
            <button class="cert-viewer-close" id="cert-viewer-close" aria-label="Close certificate viewer">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="cert-viewer-body">
            <button class="cert-viewer-nav cert-viewer-prev" id="cert-viewer-prev" aria-label="Previous certificate">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="cert-viewer-image-wrap">
                <img class="cert-viewer-image" id="cert-viewer-image" src="" alt="">
            </div>
            <button class="cert-viewer-nav cert-viewer-next" id="cert-viewer-next" aria-label="Next certificate">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="cert-viewer-footer">
            <div class="cert-viewer-meta">
                <span class="cert-viewer-label" id="cert-viewer-label"></span>
                <span class="cert-viewer-counter" id="cert-viewer-counter"></span>
            </div>
            <a class="btn btn-primary cert-viewer-pdf" id="cert-viewer-pdf" href="#" target="_blank" rel="noopener noreferrer" style="display:none">
                <i class="fas fa-file-pdf"></i> View Original PDF
            </a>
        </div>
    </div>
</div>

<script>
window.__certificates = @json($portfolio['certificates']);
</script>
