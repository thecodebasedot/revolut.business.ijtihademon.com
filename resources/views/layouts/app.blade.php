<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $siteName = config('app.name');
        $pageTitle = isset($title) ? "{$title} · {$siteName}" : $siteName;
        $pageDescription = $description ?? config('referral.disclosure');
        $canonical = url()->current();
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <link rel="canonical" href="{{ $canonical }}">
    <meta name="theme-color" content="#0b1020">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ asset('assets/img/ijtihad-emon-suit.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}?v={{ filemtime(public_path('assets/css/app.css')) }}">
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $siteName,
        'url' => url('/'),
        'description' => $pageDescription,
        'author' => ['@type' => 'Person', 'name' => config('referral.owner.name'), 'url' => config('referral.owner.website')],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <div class="notice-bar" role="note">
        <div class="container">
            <i data-lucide="info"></i>
            <span>Independent referral guide, not the official Revolut website.</span>
            <a href="{{ route('referral-disclosure') }}">Read the disclosure</a>
        </div>
    </div>

    @include('components.nav')

    <main id="main">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="{{ asset('assets/js/lucide.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}?v={{ filemtime(public_path('assets/js/app.js')) }}" defer></script>
</body>
</html>
