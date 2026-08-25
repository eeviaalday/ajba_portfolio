<section id="contact" class="contact section">
    <div class="container">
        <span class="section-label reveal">Reach Out</span>
        <h2 class="section-heading reveal">Get in Touch</h2>
        <p class="section-sub reveal">Have a question, opportunity, or just want to say hello? I'd love to hear from you.</p>

        <div class="contact-grid">
            <div class="reveal">
                <div class="contact-items">
                    <div class="contact-item glass">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <span class="contact-label">Email</span>
                            <p class="contact-value"><a href="mailto:{{ $portfolio['email'] }}">{{ $portfolio['email'] }}</a></p>
                        </div>
                    </div>
                    <div class="contact-item glass">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <span class="contact-label">Phone</span>
                            <p class="contact-value"><a href="tel:{{ $portfolio['phone'] }}">{{ $portfolio['phone'] }}</a></p>
                        </div>
                    </div>
                    <div class="contact-item glass">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <span class="contact-label">Location</span>
                            <p class="contact-value">{{ $portfolio['location'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal" style="transition-delay:.12s">
                <form class="contact-form glass" action="#" method="POST">
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
