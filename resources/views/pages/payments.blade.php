@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Payments',
    'icon' => 'send',
    'heading' => 'Send and receive payments without the friction',
    'lead' => 'Local and international transfers, bulk payouts, invoices and payment links from the same account you already use for everything else.',
])

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Sending money</p>
            <h2>Pay suppliers, contractors and staff</h2>
        </div>
        <div class="grid grid-3">
            <div class="card reveal"><span class="icon-badge"><i data-lucide="zap"></i></span><h3>Local transfers</h3><p>Send money using the local payment rails in supported countries, with many transfers arriving within minutes.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="globe-2"></i></span><h3>International transfers</h3><p>Pay overseas suppliers in their own currency, using your currency balances or exchanging at the time of payment.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="layers"></i></span><h3>Bulk payments</h3><p>Upload a file and pay many recipients in one go, useful for payroll, contractor payouts and refunds.</p></div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">Getting paid</p>
            <h2>Give customers easy ways to pay you</h2>
        </div>
        <div class="flow reveal">
            <div class="flow-node"><i data-lucide="file-text"></i><strong>Create invoice</strong><span>Branded invoices from the dashboard</span></div>
            <div class="flow-arrow"><i data-lucide="arrow-right"></i></div>
            <div class="flow-node"><i data-lucide="link"></i><strong>Share payment link</strong><span>Customer pays by card or transfer</span></div>
            <div class="flow-arrow"><i data-lucide="arrow-right"></i></div>
            <div class="flow-node"><i data-lucide="wallet"></i><strong>Funds in your account</strong><span>Matched to the invoice automatically</span></div>
        </div>
        <div class="grid grid-3" style="margin-top:2rem">
            <div class="card reveal"><h3>Invoices</h3><p>Create, send and track invoices, and see which ones are paid or overdue.</p></div>
            <div class="card reveal"><h3>Payment links</h3><p>Generate a link for a fixed amount and send it by email, chat or on social media.</p></div>
            <div class="card reveal"><h3>Recurring payments</h3><p>Schedule regular transfers such as rent, salaries or supplier retainers.</p></div>
        </div>
    </div>
</section>

@include('components.cta', ['src' => 'payments'])
@endsection
