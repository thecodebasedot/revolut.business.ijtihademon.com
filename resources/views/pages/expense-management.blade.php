@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Expense Management',
    'icon' => 'receipt',
    'heading' => 'Know where every pound goes, without the spreadsheet',
    'lead' => 'Receipt capture, approval flows, team spending limits and accounting integrations, so month-end stops being a scramble.',
])

<section class="section">
    <div class="container">
        <div class="flow reveal">
            <div class="flow-node"><i data-lucide="credit-card"></i><strong>Team member pays</strong><span>With their own card</span></div>
            <div class="flow-arrow"><i data-lucide="arrow-right"></i></div>
            <div class="flow-node"><i data-lucide="camera"></i><strong>Snap the receipt</strong><span>Prompted in the app</span></div>
            <div class="flow-arrow"><i data-lucide="arrow-right"></i></div>
            <div class="flow-node"><i data-lucide="check-square"></i><strong>Manager approves</strong><span>Or auto-approve under a limit</span></div>
            <div class="flow-arrow"><i data-lucide="arrow-right"></i></div>
            <div class="flow-node"><i data-lucide="book-open"></i><strong>Synced to accounting</strong><span>Categorised and reconciled</span></div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="grid grid-4">
            <div class="card reveal"><span class="icon-badge"><i data-lucide="camera"></i></span><h3>Receipt capture</h3><p>Team members attach receipts from their phone; missing receipts are chased automatically.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="git-branch"></i></span><h3>Approval flows</h3><p>Route spend above a threshold to the right manager before it happens.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="pie-chart"></i></span><h3>Spend analytics</h3><p>See spend by team, category, merchant and card in real time.</p></div>
            <div class="card reveal"><span class="icon-badge"><i data-lucide="plug"></i></span><h3>Accounting integrations</h3><p>Connect popular accounting tools so transactions and receipts flow straight into your books.</p></div>
        </div>
        <p class="muted center" style="margin-top:1.5rem">Feature availability differs by plan and region. Check the official product page for what is included on your plan.</p>
    </div>
</section>

@include('components.cta', ['src' => 'expense-management'])
@endsection
