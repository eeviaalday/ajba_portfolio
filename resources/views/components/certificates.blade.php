<section id="certificates" class="certs section">
    <div class="container">
        <div class="certs-header">
            <span class="section-label reveal">Achievements</span>
            <h2 class="section-heading reveal">My <span class="accent">Certifications</span></h2>
            <p class="section-sub reveal">Credentials earned throughout my digital journey.</p>
        </div>

        <div class="cert-carousel reveal" id="cert-carousel">
            <div class="cert-slides" id="cert-slides">
                @foreach($portfolio['certificates'] as $index => $cert)
                <div class="cert-slide">
                    <div class="cert-card" data-cert="{{ $index }}">
                        <div class="cert-card-img">
                            <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }} certificate" loading="lazy">
                        </div>
                        <div class="cert-card-info">
                            <span class="cert-card-issuer">{{ $cert['issuer'] }}</span>
                            <h3 class="cert-card-title">{{ $cert['title'] }}</h3>
                            @if($cert['date'])
                            <span class="cert-card-date">{{ $cert['date'] }}</span>
                            @endif
                            @if($cert['description'])
                            <p class="cert-card-desc">{{ $cert['description'] }}</p>
                            @endif
                            @if($cert['pdf'])
                            <a class="cert-card-pdf" href="{{ asset($cert['pdf']) }}" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-file-pdf"></i> View PDF
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="cert-controls">
                <button class="cert-btn" id="cert-prev" aria-label="Previous certificate">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <span class="cert-counter"><span class="accent" id="cert-current">01</span> / {{ str_pad(count($portfolio['certificates']), 2, '0', STR_PAD_LEFT) }}</span>
                <button class="cert-btn" id="cert-next" aria-label="Next certificate">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <div class="cert-dots" id="cert-dots">
                @foreach($portfolio['certificates'] as $index => $cert)
                <button class="cert-dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}" aria-label="Go to certificate {{ $index + 1 }}"></button>
                @endforeach
            </div>
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
