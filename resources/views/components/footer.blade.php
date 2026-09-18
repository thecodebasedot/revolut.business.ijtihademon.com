<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="brand">
                    <span class="brand-mark">R</span>
                    <span class="brand-text"><strong>Revolut Business</strong><small>Referral guide</small></span>
                </a>
                <p>An independent guide to opening and using a Revolut Business account, written and maintained by {{ config('referral.owner.name') }}.</p>
                <a href="{{ route('go', ['src' => 'footer']) }}" class="btn btn-primary" rel="nofollow sponsored">
                    Open a Revolut Business Account <i data-lucide="arrow-right"></i>
                </a>
            </div>
            <div>
                <h4>Products</h4>
                <ul>
                    <li><a href="{{ route('business-account') }}">Business Account</a></li>
                    <li><a href="{{ route('business-cards') }}">Business Cards</a></li>
                    <li><a href="{{ route('payments') }}">Payments</a></li>
                    <li><a href="{{ route('multi-currency') }}">Multi-Currency</a></li>
                    <li><a href="{{ route('expense-management') }}">Expense Management</a></li>
                </ul>
            </div>
            <div>
                <h4>Guide</h4>
                <ul>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('how-it-works') }}">How It Works</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4>Legal</h4>
                <ul>
                    <li><a href="{{ route('referral-disclosure') }}">Referral Disclosure</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ config('referral.official.business') }}" target="_blank" rel="noopener">Official Revolut Business ↗</a></li>
                    <li><a href="{{ config('referral.official.pricing') }}" target="_blank" rel="noopener">Official pricing ↗</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-disclosure">
            <strong>Disclosure:</strong> {{ config('referral.disclosure') }}
        </div>
        <div class="footer-bottom">
            <span>© {{ date('Y') }} {{ config('referral.owner.name') }}. All rights reserved.</span>
            <span>Built with Laravel.</span>
        </div>
    </div>
</footer>
