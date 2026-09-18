@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Business Cards',
    'icon' => 'credit-card',
    'heading' => 'Cards for every person and every purpose',
    'lead' => 'Issue physical and virtual cards to your team in seconds, set limits per card and freeze any card instantly from the app.',
])

<section class="section">
    <div class="container">
        <div class="tabs reveal" data-tabs>
            <div class="tab-list" role="tablist">
                <button type="button" role="tab" class="tab is-active" aria-selected="true" data-tab="physical">Physical cards</button>
                <button type="button" role="tab" class="tab" aria-selected="false" data-tab="virtual">Virtual cards</button>
            </div>

            <div class="tab-panel is-active" data-panel="physical">
                <div class="split">
                    <div class="split-media">
                        <div class="mock-card large physical">
                            <div class="mock-card-top"><span>Revolut Business</span><i data-lucide="wifi"></i></div>
                            <div class="mock-card-num">•••• •••• •••• 2210</div>
                            <div class="mock-card-bottom"><span>IJTIHAD EMON</span><span>PHYSICAL</span></div>
                        </div>
                    </div>
                    <div class="split-copy">
                        <h2>Physical cards</h2>
                        <p>Delivered to your team wherever they are. Ideal for travel, in-person purchases and anyone who spends on behalf of the company regularly.</p>
                        <ul class="check-list">
                            <li><i data-lucide="check-circle-2"></i> Contactless and chip-and-PIN</li>
                            <li><i data-lucide="check-circle-2"></i> Works with Apple Pay and Google Pay</li>
                            <li><i data-lucide="check-circle-2"></i> Spend abroad directly from your currency balances</li>
                            <li><i data-lucide="check-circle-2"></i> Freeze, unfreeze or cancel instantly</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-panel" data-panel="virtual">
                <div class="split">
                    <div class="split-media">
                        <div class="mock-card large">
                            <div class="mock-card-top"><span>Revolut Business</span><i data-lucide="wifi"></i></div>
                            <div class="mock-card-num">•••• •••• •••• 4821</div>
                            <div class="mock-card-bottom"><span>SAAS SUBSCRIPTIONS</span><span>VIRTUAL</span></div>
                        </div>
                    </div>
                    <div class="split-copy">
                        <h2>Virtual cards</h2>
                        <p>Create a card in seconds for online spending. Give each subscription, vendor or project its own card so you always know where money goes.</p>
                        <ul class="check-list">
                            <li><i data-lucide="check-circle-2"></i> Instant issue, no waiting for delivery</li>
                            <li><i data-lucide="check-circle-2"></i> One card per subscription or vendor</li>
                            <li><i data-lucide="check-circle-2"></i> Single-use options for one-off purchases</li>
                            <li><i data-lucide="check-circle-2"></i> Delete a card to stop a vendor charging you</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Controls</p>
            <h2>Spending controls that scale with your team</h2>
        </div>
        <div class="grid grid-4">
            <div class="card reveal"><span class="icon-badge"><i data-lucide="gauge"></i></span><h3>Per-card limits</h3><p>Daily, monthly or total limits on every card.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="tags"></i></span><h3>Category rules</h3><p>Allow or block merchant categories such as travel or entertainment.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="snowflake"></i></span><h3>Instant freeze</h3><p>Lost a card? Freeze it in one tap and unfreeze when it turns up.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="bell-ring"></i></span><h3>Real-time alerts</h3><p>Every card transaction shows up the moment it happens.</p></div>
        </div>
    </div>
</section>

@include('components.cta', ['src' => 'business-cards'])
@endsection
