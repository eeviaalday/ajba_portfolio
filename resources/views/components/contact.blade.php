<section id="contact" class="contact section">
    <div class="container">
        <span class="section-label reveal">Reach Out</span>
        <h2 class="section-heading reveal">Get in <span class="accent">Touch</span></h2>
        <p class="section-sub reveal">Have a question, opportunity, or just want to say hello? I'd love to hear from you.</p>

        <div class="contact-grid">
            <div class="reveal">
                <div class="contact-info">
                    <div class="contact-block glass">
                        <div class="contact-block-label">Email</div>
                        <div class="contact-block-value"><a href="mailto:{{ $portfolio['email'] }}">{{ $portfolio['email'] }}</a></div>
                    </div>
                    <div class="contact-block glass">
                        <div class="contact-block-label">Phone</div>
                        <div class="contact-block-value"><a href="tel:{{ $portfolio['phone'] }}">{{ $portfolio['phone'] }}</a></div>
                    </div>
                    <div class="contact-block glass">
                        <div class="contact-block-label">Location</div>
                        <div class="contact-block-value">{{ $portfolio['location'] }}</div>
                    </div>
                    <div class="contact-block glass">
                        <div class="contact-block-label">Social Media</div>
                        <div class="contact-social-links">
                            <a href="{{ $portfolio['social']['github'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                                GitHub <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                            <a href="{{ $portfolio['social']['facebook'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                                Facebook <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                            <a href="{{ $portfolio['social']['tiktok'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                                TikTok <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                            <a href="{{ $portfolio['social']['instagram'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                                Instagram <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                            <a href="{{ $portfolio['social']['discord'] }}" target="_blank" rel="noopener noreferrer" class="contact-social-link">
                                Discord <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal" style="transition-delay:.12s">
                <form class="contact-form-wrap glass" action="#" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-field">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name" required>
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="What's this about?" required>
                    </div>
                    <div class="form-field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Write your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
