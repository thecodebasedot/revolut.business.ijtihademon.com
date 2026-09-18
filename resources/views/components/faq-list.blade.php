@props(['faqs'])
<div class="faq-list" data-accordion>
    @foreach ($faqs as $i => $f)
        <div class="faq-item">
            <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-{{ $i }}">
                <span>{{ $f['q'] }}</span>
                <i data-lucide="plus"></i>
            </button>
            <div class="faq-a" id="faq-{{ $i }}" hidden>
                <p>{{ $f['a'] }}</p>
            </div>
        </div>
    @endforeach
</div>
