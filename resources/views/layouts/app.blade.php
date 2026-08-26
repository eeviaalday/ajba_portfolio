<!DOCTYPE html>
<html lang="en" data-theme="light" data-accent="lavender">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
</head>
<body>
    <nav class="nav" id="site-nav">
        <div class="nav-inner">
            <a href="#intro" class="nav-brand">aivee<span>.</span></a>

            <ul class="nav-links" id="nav-links">
                <li><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Journey</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="theme-controls">
                <button class="theme-icon-btn" id="palette-btn" title="Change color theme" aria-label="Change color theme">
                    <i class="fas fa-palette"></i>
                </button>
                <div class="palette-popover" id="palette-popover">
                    <span class="palette-label">Color Theme</span>
                    <div class="palette-options">
                        <button class="palette-opt active" data-color="lavender" title="Lavender"><span class="palette-swatch" style="background:hsl(260,60%,70%)"></span>Lavender</button>
                        <button class="palette-opt" data-color="purple" title="Neon Purple"><span class="palette-swatch" style="background:hsl(280,80%,65%)"></span>Neon Purple</button>
                        <button class="palette-opt" data-color="rose" title="Rose"><span class="palette-swatch" style="background:hsl(330,65%,68%)"></span>Rose</button>
                        <button class="palette-opt" data-color="blue" title="Blue"><span class="palette-swatch" style="background:hsl(220,65%,65%)"></span>Blue</button>
                        <button class="palette-opt" data-color="mint" title="Mint"><span class="palette-swatch" style="background:hsl(160,50%,60%)"></span>Mint</button>
                    </div>
                </div>
                <button class="theme-icon-btn" id="theme-toggle" title="Toggle light/dark mode" aria-label="Toggle dark mode">
                    <i class="fas fa-sun" id="theme-icon"></i>
                </button>
                <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @include('components.footer')
    <script src="{{ asset('js/constellation.js') }}?v={{ filemtime(public_path('js/constellation.js')) }}"></script>
    <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
</body>
</html>
