@php
    $products = [
        ['route' => 'business-account', 'label' => 'Business Account', 'icon' => 'building-2'],
        ['route' => 'business-cards', 'label' => 'Business Cards', 'icon' => 'credit-card'],
        ['route' => 'payments', 'label' => 'Payments', 'icon' => 'send'],
        ['route' => 'multi-currency', 'label' => 'Multi-Currency', 'icon' => 'globe'],
        ['route' => 'expense-management', 'label' => 'Expense Management', 'icon' => 'receipt'],
    ];
    $productActive = collect($products)->contains(fn ($p) => request()->routeIs($p['route']));
@endphp
<header class="site-header" id="siteHeader">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="brand" aria-label="{{ config('app.name') }} home">
            <span class="brand-mark">R</span>
            <span class="brand-text">
                <strong>Revolut Business</strong>
                <small>Referral guide by Ijtihad Emon</small>
            </span>
        </a>

        <nav class="nav-links" id="navLinks" aria-label="Main navigation">
            <div class="nav-dropdown {{ $productActive ? 'is-active' : '' }}">
                <button type="button" class="nav-link" aria-expanded="false" aria-controls="productsMenu">
                    Products <i data-lucide="chevron-down"></i>
                </button>
                <div class="dropdown-menu" id="productsMenu">
                    @foreach ($products as $p)
                        <a href="{{ route($p['route']) }}" class="dropdown-item {{ request()->routeIs($p['route']) ? 'is-active' : '' }}">
                            <i data-lucide="{{ $p['icon'] }}"></i>
                            <span>{{ $p['label'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('pricing') }}" class="nav-link {{ request()->routeIs('pricing') ? 'is-active' : '' }}">Pricing</a>
            <a href="{{ route('how-it-works') }}" class="nav-link {{ request()->routeIs('how-it-works') ? 'is-active' : '' }}">How It Works</a>
            <a href="{{ route('faq') }}" class="nav-link {{ request()->routeIs('faq') ? 'is-active' : '' }}">FAQ</a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'is-active' : '' }}">About</a>
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a>
            <a href="{{ route('go', ['src' => 'nav']) }}" class="btn btn-primary btn-sm nav-cta" rel="nofollow sponsored">
                Open a Revolut Business Account <i data-lucide="arrow-right"></i>
            </a>
        </nav>

        <button type="button" class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="navLinks" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
