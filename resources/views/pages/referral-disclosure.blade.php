@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Referral Disclosure',
    'icon' => 'scale',
    'heading' => 'How this website earns, in plain language',
    'lead' => 'Transparency is the point of this page. Here is exactly what the referral link does and what it does not.',
])

<section class="section">
    <div class="container narrow prose">
        <div class="callout reveal">
            <i data-lucide="info"></i>
            <div><strong>Disclosure</strong><p>{{ config('referral.disclosure') }}</p></div>
        </div>

        <h2>This is not the official Revolut website</h2>
        <p>revolut.business.ijtihademon.com is owned and operated by {{ config('referral.owner.name') }}, a private individual. It is not owned by, operated by, or affiliated with Revolut Ltd or any Revolut group company. Revolut has not reviewed or endorsed the content here.</p>
        <p>The official Revolut Business website is <a href="{{ config('referral.official.business') }}" target="_blank" rel="noopener">revolut.com/business</a>. Your account, your data and your money are handled entirely by Revolut. This website never asks for your login, card details or any account information.</p>

        <h2>What the referral link does</h2>
        <p>Every "Open a Revolut Business Account" button on this site goes to the official Revolut Business sign-up page with my personal referral code attached. If a business signs up through that link and meets the conditions of the referral campaign in force at the time, Revolut may pay me a reward.</p>
        <ul>
            <li>Using the link does not cost you anything extra.</li>
            <li>Using the link does not change the product, pricing or terms you receive from Revolut.</li>
            <li>You can, of course, sign up directly on revolut.com without using my link.</li>
        </ul>

        <h2>Rewards are not guaranteed, for either of us</h2>
        <p>Revolut runs referral campaigns with their own eligibility rules, deadlines and reward amounts, and invites selected customers to take part. Those rules can change or end at any time. For that reason this site does not state a specific reward amount or promise that anyone will receive one. Any reward offered to you as a new customer will be shown by Revolut on the official sign-up page, and the terms there take precedence over anything written here.</p>

        <h2>Accuracy of information</h2>
        <p>Product descriptions on this site are summaries of Revolut's public product pages, written to help you decide whether to apply. They are not financial advice and may fall out of date. Always confirm current features, fees and eligibility on the official site before making decisions.</p>

        <h2>Trademarks</h2>
        <p>Revolut, the Revolut logo and Revolut Business are trademarks of Revolut Ltd. They are used here only to identify the product being described.</p>

        <h2>Questions</h2>
        <p>If anything here is unclear, <a href="{{ route('contact') }}">contact me</a>. Last updated {{ now()->format('F Y') }}.</p>
    </div>
</section>
@endsection
