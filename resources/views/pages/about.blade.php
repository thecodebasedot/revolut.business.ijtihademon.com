@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container split">
        <div class="split-copy">
            <p class="eyebrow"><i data-lucide="user"></i> About</p>
            <h1>Ijtihad Emon</h1>
            <p class="lead">{{ config('referral.owner.title') }}</p>
            <p>I work at the intersection of software development, data/AI/ML and cybersecurity. My background includes Python, SQL and C-family languages, machine learning with PyTorch, TensorFlow and scikit-learn, data engineering on AWS and GCP, and security work backed by the Certified Ethical Hacker (CEH) credential with ongoing work toward CPENT.</p>
            <div class="hero-actions">
                <a href="{{ config('referral.owner.website') }}" target="_blank" rel="noopener" class="btn btn-outline">Personal website ↗</a>
                <a href="{{ config('referral.owner.linkedin') }}" target="_blank" rel="noopener" class="btn btn-ghost">LinkedIn ↗</a>
            </div>
        </div>
        <div class="split-media">
            <img src="{{ asset('assets/img/ijtihad-emon-suit.jpg') }}" alt="Ijtihad Emon in a navy suit" width="600" height="600" class="portrait">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Why this site exists</p>
            <h2>A referral page that actually explains things</h2>
        </div>
        <div class="grid grid-3">
            <div class="card reveal"><span class="icon-badge"><i data-lucide="book-open"></i></span><h3>Plain-English guide</h3><p>Most referral links are a bare URL. I wanted somewhere that explains what Revolut Business does before you commit ten minutes to an application.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="eye"></i></span><h3>Honest about incentives</h3><p>I may earn a referral reward when you sign up. That is disclosed on every page, not buried in a footer.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="shield"></i></span><h3>Security-minded</h3><p>This site never collects account details. The only form is the contact form, and it stores exactly what you type into it.</p></div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Areas of work</p>
            <h2>What I do</h2>
        </div>
        <div class="grid grid-3">
            <div class="card reveal">
                <span class="icon-badge"><i data-lucide="code-2"></i></span>
                <h3>Software development</h3>
                <p>Python, SQL, C/C++/C#, Swift, shell scripting, full-stack web with Flask, Django, Laravel and modern front-end tooling.</p>
            </div>
            <div class="card reveal">
                <span class="icon-badge"><i data-lucide="brain-circuit"></i></span>
                <h3>Data, AI & ML</h3>
                <p>Machine learning and deep learning with PyTorch, TensorFlow and scikit-learn; data pipelines with Spark and Airflow; analytics in Power BI and Tableau.</p>
            </div>
            <div class="card reveal">
                <span class="icon-badge"><i data-lucide="lock"></i></span>
                <h3>Cybersecurity</h3>
                <p>Penetration testing, security assessment and ethical hacking. Certified Ethical Hacker (CEH), working toward CPENT.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="photo-strip reveal">
            <img src="{{ asset('assets/img/ijtihad-emon-tweed.jpg') }}" alt="Ijtihad Emon in a tweed jacket" loading="lazy" width="400" height="400">
            <img src="{{ asset('assets/img/ijtihad-emon-turtleneck.jpg') }}" alt="Ijtihad Emon in a black turtleneck" loading="lazy" width="400" height="400">
            <img src="{{ asset('assets/img/ijtihad-emon-henley.jpg') }}" alt="Ijtihad Emon in a grey henley" loading="lazy" width="400" height="400">
        </div>
    </div>
</section>

@include('components.cta', ['src' => 'about'])
@endsection
