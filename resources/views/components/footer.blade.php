<footer class="footer">
    <div class="container">
        <div class="footer-line"></div>
        <div class="footer-social">
            <a href="{{ $portfolio['social']['github'] }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="{{ $portfolio['social']['facebook'] }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ $portfolio['social']['tiktok'] }}" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="{{ $portfolio['social']['instagram'] }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="{{ $portfolio['social']['discord'] }}" target="_blank" rel="noopener noreferrer" aria-label="Discord"><i class="fab fa-discord"></i></a>
        </div>
        <p class="footer-copy">&copy; {{ date('Y') }} {{ $portfolio['name'] }} &middot; <a href="mailto:{{ $portfolio['email'] }}">{{ $portfolio['email'] }}</a> &middot; <a href="tel:{{ $portfolio['phone'] }}">{{ $portfolio['phone'] }}</a></p>
    </div>
</footer>
