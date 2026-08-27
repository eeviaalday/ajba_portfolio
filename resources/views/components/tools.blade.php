<section id="tools" class="tools section">
    <div class="container">
        <span class="section-label reveal">Toolkit</span>
        <h2 class="section-heading reveal">Tools I've <span class="accent">Used</span></h2>
        <p class="section-sub reveal">Technologies, platforms, and creative tools I've explored throughout my IT journey.</p>

        @foreach($portfolio['tools'] as $category => $items)
        <div class="tools-category reveal" style="transition-delay:{{ $loop->index * 0.08 }}s">
            <h3 class="tools-category-label">{{ $category }}</h3>
            <div class="tools-grid">
                @foreach($items as $tool)
                <div class="tool-chip" title="{{ $tool['name'] }}">
                    <span class="tool-icon">{!! $tool['icon'] !!}</span>
                    <span class="tool-name">{{ $tool['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>
