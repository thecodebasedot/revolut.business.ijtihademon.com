@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow"><i data-lucide="sparkles"></i> Independent Revolut Business referral guide</p>
            <h1>Run your business finances from <span class="grad">one modern account</span>.</h1>
            <p class="lead">Revolut Business gives startups, small businesses and growing companies a multi-currency account, team cards, fast payments and expense tools in a single app. This site walks you through what it offers and how to open an account.</p>
            <div class="hero-actions">
                <a href="{{ route('go', ['src' => 'hero']) }}" class="btn btn-primary btn-lg" rel="nofollow sponsored">
                    Open a Revolut Business Account <i data-lucide="arrow-right"></i>
                </a>
                <a href="{{ route('how-it-works') }}" class="btn btn-ghost btn-lg">See how it works</a>
            </div>
            <ul class="hero-trust">
                <li><i data-lucide="check"></i> Sign-up on the official Revolut site</li>
                <li><i data-lucide="check"></i> No extra cost for using the referral link</li>
                <li><i data-lucide="check"></i> Clear referral disclosure</li>
            </ul>
        </div>

        <div class="hero-visual" aria-hidden="true">
            <div class="mock-dashboard">
                <div class="mock-top">
                    <span class="mock-dot"></span><span class="mock-dot"></span><span class="mock-dot"></span>
                    <span class="mock-title">Business · Overview</span>
                </div>
                <div class="mock-balance">
                    <small>Total balance</small>
                    <strong data-counter="248560" data-prefix="£" data-decimals="2">£0.00</strong>
                    <span class="mock-pill up"><i data-lucide="trending-up"></i> +12.4% this month</span>
                </div>
                <div class="mock-accounts">
                    <div class="mock-acct"><span class="flag">🇬🇧</span><div><small>GBP</small><strong>£152,300.20</strong></div></div>
                    <div class="mock-acct"><span class="flag">🇪🇺</span><div><small>EUR</small><strong>€61,010.00</strong></div></div>
                    <div class="mock-acct"><span class="flag">🇺🇸</span><div><small>USD</small><strong>$44,890.75</strong></div></div>
                </div>
                <div class="mock-bars">
                    <span style="--h:40%"></span><span style="--h:65%"></span><span style="--h:50%"></span><span style="--h:80%"></span><span style="--h:60%"></span><span style="--h:90%"></span><span style="--h:72%"></span>
                </div>
                <div class="mock-list">
                    <div class="mock-row"><i data-lucide="arrow-down-left"></i><span>Client invoice #1042</span><strong class="pos">+ £4,200.00</strong></div>
                    <div class="mock-row"><i data-lucide="credit-card"></i><span>Team card · Cloud hosting</span><strong>− $312.40</strong></div>
                    <div class="mock-row"><i data-lucide="repeat"></i><span>GBP → EUR exchange</span><strong>€5,000.00</strong></div>
                </div>
            </div>
            <div class="mock-card">
                <div class="mock-card-top"><span>Revolut Business</span><i data-lucide="wifi"></i></div>
                <div class="mock-card-num">•••• •••• •••• 4821</div>
                <div class="mock-card-bottom"><span>IJTIHAD EMON</span><span>VIRTUAL</span></div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">What you get</p>
            <h2>Everything a modern business account should do</h2>
            <p>Each feature below has its own page with more detail. All product claims are summaries of Revolut's public product pages; check the official site for current specifics.</p>
        </div>
        <div class="grid grid-3">
            @foreach ($features as $f)
                <a href="{{ route($f['route']) }}" class="card feature-card reveal">
                    <span class="icon-badge"><i data-lucide="{{ $f['icon'] }}"></i></span>
                    <h3>{{ $f['title'] }}</h3>
                    <p>{{ $f['text'] }}</p>
                    <span class="card-link">Learn more <i data-lucide="arrow-right"></i></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">How it works</p>
            <h2>From application to first payment in four steps</h2>
        </div>
        <ol class="steps">
            @foreach ($steps as $i => $s)
                <li class="step reveal">
                    <span class="step-num">{{ $i + 1 }}</span>
                    <div>
                        <h3>{{ $s['title'] }}</h3>
                        <p>{{ $s['text'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
        <div class="center reveal">
            <a href="{{ route('how-it-works') }}" class="btn btn-outline">Read the full walkthrough</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div class="split-media reveal">
            <img src="{{ asset('assets/img/ijtihad-emon-tweed.jpg') }}" alt="Ijtihad Emon" loading="lazy" width="512" height="512">
        </div>
        <div class="split-copy reveal">
            <p class="eyebrow">Who runs this site</p>
            <h2>Hi, I'm Ijtihad Emon.</h2>
            <p>I work across software development, data/AI/ML and cybersecurity. I built this guide because most referral pages are a single link with no context. Here you get a plain-English explanation of what Revolut Business does, who it is for, and what to expect during sign-up.</p>
            <p>If you open an account through my link and meet Revolut's referral conditions, I may receive a reward. That is the whole business model of this site, and it is stated on every page.</p>
            <div class="hero-actions">
                <a href="{{ route('about') }}" class="btn btn-outline">More about me</a>
                <a href="{{ route('referral-disclosure') }}" class="btn btn-ghost">Referral disclosure</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head reveal">
            <p class="eyebrow">Common questions</p>
            <h2>Quick answers</h2>
        </div>
        <div class="reveal">
            @include('components.faq-list', ['faqs' => $faqs])
        </div>
        <div class="center reveal">
            <a href="{{ route('faq') }}" class="btn btn-outline">See all questions</a>
        </div>
    </div>
</section>

@include('components.cta', ['src' => 'home-bottom'])
@endsection
