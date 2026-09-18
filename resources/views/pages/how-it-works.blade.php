@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'How It Works',
    'icon' => 'route',
    'heading' => 'Opening a Revolut Business account, step by step',
    'lead' => 'Here is exactly what happens from the moment you click the button on this site to the moment your account is live.',
])

<section class="section">
    <div class="container narrow">
        <ol class="timeline">
            @foreach ($steps as $i => $s)
                <li class="timeline-item reveal">
                    <span class="timeline-num">{{ $i + 1 }}</span>
                    <div class="timeline-body">
                        <h3>{{ $s['title'] }}</h3>
                        <p>{{ $s['text'] }}</p>
                        @if ($i === 2)
                            <a href="{{ route('go', ['src' => 'how-it-works']) }}" class="btn btn-primary" rel="nofollow sponsored">Open a Revolut Business Account <i data-lucide="arrow-right"></i></a>
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">What to expect</p>
            <h2>Timeline at a glance</h2>
        </div>
        <div class="grid grid-3">
            <div class="card stat-card reveal"><strong>~10 min</strong><span>to complete the online application form</span></div>
            <div class="card stat-card reveal"><strong>Hours to days</strong><span>for Revolut to review your documents</span></div>
            <div class="card stat-card reveal"><strong>Same day</strong><span>to issue virtual cards once approved</span></div>
        </div>
        <p class="muted center" style="margin-top:1.5rem">Timings are typical experiences, not guarantees. Complex company structures can take longer to review.</p>
    </div>
</section>

@include('components.cta', ['src' => 'how-it-works-bottom'])
@endsection
