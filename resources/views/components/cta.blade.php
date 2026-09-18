@props(['src' => 'cta', 'heading' => 'Ready to open your Revolut Business account?', 'text' => 'Sign-up happens on the official Revolut Business site and usually takes about 10 minutes.'])
<section class="cta-band reveal">
    <div class="container cta-inner">
        <div>
            <h2>{{ $heading }}</h2>
            <p>{{ $text }}</p>
        </div>
        <div class="cta-actions">
            <a href="{{ route('go', ['src' => $src]) }}" class="btn btn-primary btn-lg" rel="nofollow sponsored">
                Open a Revolut Business Account <i data-lucide="arrow-right"></i>
            </a>
            <a href="{{ route('referral-disclosure') }}" class="btn btn-ghost">Referral disclosure</a>
        </div>
    </div>
</section>
