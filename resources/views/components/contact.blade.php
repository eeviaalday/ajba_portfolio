<section id="contact" class="contact section">
    <div class="container">
        <div class="contact-header">
            <span class="section-label reveal">Reach Out</span>
            <h2 class="section-heading reveal">Get in <span class="accent">Touch</span></h2>
            <p class="section-sub reveal">Have a question, opportunity, or just want to say hello? I'd love to hear from you.</p>
        </div>

        <div class="contact-actions reveal">
            <button type="button" class="btn btn-primary contact-copy-btn"
                data-copy="{{ $portfolio['email'] }}"
                data-confirm="Email Copied"
                data-box="✓">
                <span class="contact-copy-label"><i class="fas fa-envelope"></i> Copy Email</span>
                <span class="contact-copy-box">📋</span>
            </button>
            <button type="button" class="btn btn-primary contact-copy-btn"
                data-copy="{{ $portfolio['phone'] }}"
                data-confirm="Phone Copied"
                data-box="✓">
                <span class="contact-copy-label"><i class="fas fa-phone"></i> Copy Phone</span>
                <span class="contact-copy-box">📋</span>
            </button>
        </div>

        <div class="contact-grid reveal">
            <div class="contact-info-col">
                <div class="contact-block glass">
                    <div class="contact-block-label">Email</div>
                    <div class="contact-block-value"><a href="mailto:{{ $portfolio['email'] }}">{{ $portfolio['email'] }}</a></div>
                </div>
                <div class="contact-block glass">
                    <div class="contact-block-label">Phone Number</div>
                    <div class="contact-block-value"><a href="tel:{{ $portfolio['phone'] }}">{{ $portfolio['phone'] }}</a></div>
                </div>
                <div class="contact-block glass">
                    <div class="contact-block-label">Location</div>
                    <div class="contact-block-value">{{ $portfolio['location'] }}</div>
                </div>
            </div>

            <div class="contact-info-col">
                <div class="contact-block glass">
                    <div class="contact-block-label">Social Media</div>
                    <div class="contact-social-links">
                        <a href="{{ $portfolio['social']['github'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                            <span><i class="fab fa-github"></i> GitHub</span>
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                        <a href="{{ $portfolio['social']['facebook'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                            <span><i class="fab fa-facebook-f"></i> Facebook</span>
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                        <a href="{{ $portfolio['social']['tiktok'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                            <span><i class="fab fa-tiktok"></i> TikTok</span>
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                        <a href="{{ $portfolio['social']['instagram'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                            <span><i class="fab fa-instagram"></i> Instagram</span>
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                        <a href="{{ $portfolio['social']['discord'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                            <span><i class="fab fa-discord"></i> Discord</span>
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
