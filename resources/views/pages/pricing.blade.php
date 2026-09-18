@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Pricing',
    'icon' => 'badge-percent',
    'heading' => 'Plans for every stage of your business',
    'lead' => 'Revolut Business offers several plan tiers, from a free entry plan to custom enterprise pricing. Fees and allowances change, so this page describes the tiers and links to the official price list rather than quoting numbers.',
])

<section class="section">
    <div class="container">
        <div class="grid grid-4">
            @foreach ($plans as $i => $plan)
                <div class="card plan-card reveal {{ $i === 1 ? 'is-featured' : '' }}">
                    @if ($i === 1)<span class="plan-badge">Popular</span>@endif
                    <h3>{{ $plan['name'] }}</h3>
                    <p class="muted">{{ $plan['for'] }}</p>
                    <ul class="check-list compact">
                        @foreach ($plan['points'] as $pt)
                            <li><i data-lucide="check"></i> {{ $pt }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ config('referral.official.pricing') }}" target="_blank" rel="noopener" class="btn btn-outline btn-block">See current price ↗</a>
                </div>
            @endforeach
        </div>
        <div class="callout reveal">
            <i data-lucide="alert-circle"></i>
            <div>
                <strong>Why no prices here?</strong>
                <p>Revolut updates plan fees, free allowances and included features from time to time and they differ by country. Publishing a number here risks giving you outdated information. The <a href="{{ config('referral.official.pricing') }}" target="_blank" rel="noopener">official Revolut Business pricing page</a> is always current.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head reveal">
            <p class="eyebrow">Choosing a plan</p>
            <h2>A rough rule of thumb</h2>
        </div>
        <div class="grid grid-2">
            <div class="card reveal"><h3>Start on the free plan if…</h3><p>You are a freelancer or a very small company with modest payment volumes and mostly domestic transactions. You can upgrade later without reopening the account.</p></div>
            <div class="card reveal"><h3>Consider a paid plan if…</h3><p>You send many international payments, need several team members with cards, or want approval flows and accounting sync. The free allowances on a paid plan can quickly outweigh its monthly fee.</p></div>
        </div>
    </div>
</section>

@include('components.cta', ['src' => 'pricing'])
@endsection
