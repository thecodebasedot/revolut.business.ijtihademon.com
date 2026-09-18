@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Privacy Policy',
    'icon' => 'shield',
    'heading' => 'Privacy policy',
    'lead' => 'This site collects as little as possible. Here is what it does collect and why.',
])

<section class="section">
    <div class="container narrow prose">
        <h2>Who is responsible</h2>
        <p>This website is operated by {{ config('referral.owner.name') }}. You can reach me at <a href="mailto:{{ config('referral.owner.email') }}">{{ config('referral.owner.email') }}</a>.</p>

        <h2>What is collected</h2>
        <ul>
            <li><strong>Contact form.</strong> Your name, email address, subject and message, plus your IP address and browser user agent for spam prevention. Stored so I can reply to you.</li>
            <li><strong>Referral clicks.</strong> When you click a "Open a Revolut Business Account" button, the site logs which page the click came from and the referring URL. No personal identifier is stored.</li>
            <li><strong>Server logs.</strong> Standard web server logs, retained briefly for security and troubleshooting.</li>
        </ul>

        <h2>What is not collected</h2>
        <p>No analytics trackers, no advertising cookies and no third-party marketing scripts are used. The site does not ask for, and you should never send, Revolut login details, card numbers or account information.</p>

        <h2>Cookies</h2>
        <p>Laravel sets a session cookie and a CSRF token cookie, which are required for the contact form to work securely. Nothing else is stored in your browser except your own checkbox state in the readiness checklist, which lives only on your device.</p>

        <h2>Third parties</h2>
        <p>Clicking the referral button takes you to business.revolut.com, where Revolut's own privacy policy applies. Icons and scripts are served from this site. Fonts are loaded from Google Fonts, which may see your IP address when the files are fetched.</p>

        <h2>Your rights</h2>
        <p>You can ask me to show, correct or delete any message you sent through the contact form by emailing the address above.</p>

        <p class="muted">Last updated {{ now()->format('F Y') }}.</p>
    </div>
</section>
@endsection
