@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Business Account',
    'icon' => 'building-2',
    'heading' => 'A business account built for how companies actually work',
    'lead' => 'Local account details, multi-currency balances, team access and a full web dashboard, all opened online without visiting a branch.',
])

<section class="section">
    <div class="container">
        <div class="grid grid-3">
            <div class="card reveal">
                <span class="icon-badge"><i data-lucide="landmark"></i></span>
                <h3>Local account details</h3>
                <p>Get account details for receiving payments in your home currency, so clients can pay you the same way they pay any other business.</p>
            </div>
            <div class="card reveal">
                <span class="icon-badge"><i data-lucide="users"></i></span>
                <h3>Team access & roles</h3>
                <p>Invite colleagues with role-based permissions. Give accountants read access, let managers approve spend, keep payments under your control.</p>
            </div>
            <div class="card reveal">
                <span class="icon-badge"><i data-lucide="monitor-smartphone"></i></span>
                <h3>App and web dashboard</h3>
                <p>Manage everything from the mobile app on the go or the web dashboard at your desk. Real-time notifications for every transaction.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container split">
        <div class="split-copy reveal">
            <p class="eyebrow">Eligibility</p>
            <h2>Who can apply</h2>
            <p>Revolut Business is designed for registered companies and, in supported regions, sole traders. In broad terms you will need:</p>
            <ul class="check-list">
                <li><i data-lucide="check-circle-2"></i> A company that is registered and active in a country Revolut Business supports</li>
                <li><i data-lucide="check-circle-2"></i> An accepted business activity (some industries are restricted)</li>
                <li><i data-lucide="check-circle-2"></i> Directors and beneficial owners who can verify their identity</li>
                <li><i data-lucide="check-circle-2"></i> A physical business address and a contact phone number</li>
            </ul>
            <p class="muted">Exact eligibility rules differ by country and change over time. The definitive list is on the <a href="{{ config('referral.official.business') }}" target="_blank" rel="noopener">official Revolut Business site</a>.</p>
        </div>
        <div class="split-media reveal">
            <div class="checklist-widget" data-checklist>
                <h3>Application readiness check</h3>
                <p class="muted">Tick what you already have. This stays in your browser only.</p>
                <label><input type="checkbox"> Company registration number</label>
                <label><input type="checkbox"> Registered business address</label>
                <label><input type="checkbox"> Description of what the business does</label>
                <label><input type="checkbox"> Photo ID for each director / owner</label>
                <label><input type="checkbox"> Proof of address for the applicant</label>
                <label><input type="checkbox"> Business website or social profile (helpful, not always required)</label>
                <div class="progress"><span data-progress-bar style="width:0%"></span></div>
                <p class="progress-label" data-progress-label>0 of 6 ready</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Opening process</p>
            <h2>What the application looks like</h2>
        </div>
        <ol class="steps">
            @foreach ($steps as $i => $s)
                <li class="step reveal">
                    <span class="step-num">{{ $i + 1 }}</span>
                    <div><h3>{{ $s['title'] }}</h3><p>{{ $s['text'] }}</p></div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

@include('components.cta', ['src' => 'business-account'])
@endsection
