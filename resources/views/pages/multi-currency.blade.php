@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Multi-Currency',
    'icon' => 'globe',
    'heading' => 'Hold, exchange and spend in multiple currencies',
    'lead' => 'Keep balances in the currencies you actually do business in, exchange when it suits you, and pay like a local in each market.',
])

<section class="section">
    <div class="container split">
        <div class="split-copy reveal">
            <p class="eyebrow">Currency balances</p>
            <h2>One account, many currencies</h2>
            <p>Instead of opening a separate account in each country, keep multiple currency balances inside the same Revolut Business account. Receive a payment in EUR, pay a supplier in USD and cover payroll in GBP without moving money between banks.</p>
            <ul class="check-list">
                <li><i data-lucide="check-circle-2"></i> Hold balances in a wide range of currencies</li>
                <li><i data-lucide="check-circle-2"></i> Local account details for major currencies</li>
                <li><i data-lucide="check-circle-2"></i> Cards spend directly from the matching balance</li>
                <li><i data-lucide="check-circle-2"></i> Exchange between balances inside the app</li>
            </ul>
            <p class="muted">Available currencies, exchange fees and monthly allowances depend on your plan. See the <a href="{{ config('referral.official.pricing') }}" target="_blank" rel="noopener">official pricing page</a>.</p>
        </div>
        <div class="split-media reveal">
            <div class="fx-widget" data-fx>
                <h3>Exchange demo</h3>
                <p class="muted">Illustrative only: rates below are sample values, not live Revolut rates.</p>
                <label>Amount
                    <input type="number" min="0" step="100" value="10000" data-fx-amount>
                </label>
                <div class="fx-row">
                    <label>From
                        <select data-fx-from>
                            <option value="GBP" selected>GBP £</option>
                            <option value="EUR">EUR €</option>
                            <option value="USD">USD $</option>
                        </select>
                    </label>
                    <button type="button" class="fx-swap" data-fx-swap aria-label="Swap currencies"><i data-lucide="arrow-left-right"></i></button>
                    <label>To
                        <select data-fx-to>
                            <option value="GBP">GBP £</option>
                            <option value="EUR" selected>EUR €</option>
                            <option value="USD">USD $</option>
                        </select>
                    </label>
                </div>
                <div class="fx-result">
                    <small>You would receive approximately</small>
                    <strong data-fx-result>—</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="grid grid-3">
            <div class="card reveal"><span class="icon-badge"><i data-lucide="repeat"></i></span><h3>Exchange when you choose</h3><p>Convert between balances in the app when the rate suits you, rather than at the moment a payment goes out.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="bell"></i></span><h3>Rate alerts</h3><p>Set a target rate and get notified when the market gets there.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="calendar-clock"></i></span><h3>Scheduled exchanges</h3><p>Automate regular conversions, useful when you pay overseas suppliers on a fixed cycle.</p></div>
        </div>
    </div>
</section>

@include('components.cta', ['src' => 'multi-currency'])
@endsection
