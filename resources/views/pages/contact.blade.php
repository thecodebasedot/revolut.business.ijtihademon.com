@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'Contact',
    'icon' => 'mail',
    'heading' => 'Get in touch',
    'lead' => 'General questions about Revolut Business or this site are welcome. For anything about an existing Revolut account, contact Revolut support directly through the app.',
])

<section class="section">
    <div class="container split">
        <div class="split-copy reveal">
            <h2>Send a message</h2>

            @if (session('status'))
                <div class="alert alert-success" role="status"><i data-lucide="check-circle-2"></i> {{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error" role="alert"><i data-lucide="alert-triangle"></i> Please fix the highlighted fields.</div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="form" novalidate>
                @csrf
                <div class="form-row">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="120" class="{{ $errors->has('name') ? 'is-invalid' : '' }}">
                    @error('name')<small class="error">{{ $message }}</small>@enderror
                </div>
                <div class="form-row">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="190" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                    @error('email')<small class="error">{{ $message }}</small>@enderror
                </div>
                <div class="form-row">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required maxlength="160" class="{{ $errors->has('subject') ? 'is-invalid' : '' }}">
                    @error('subject')<small class="error">{{ $message }}</small>@enderror
                </div>
                <div class="form-row">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" required minlength="10" maxlength="3000" class="{{ $errors->has('message') ? 'is-invalid' : '' }}">{{ old('message') }}</textarea>
                    @error('message')<small class="error">{{ $message }}</small>@enderror
                </div>
                <div class="hp" aria-hidden="true">
                    <label for="website">Website</label>
                    <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Send message <i data-lucide="send"></i></button>
                <p class="muted small">Never include passwords, card numbers or account details in a message.</p>
            </form>
        </div>

        <div class="split-media reveal">
            <div class="card contact-card">
                <img src="{{ asset('assets/img/ijtihad-emon-turtleneck.jpg') }}" alt="Ijtihad Emon" width="96" height="96" class="avatar">
                <h3>{{ config('referral.owner.name') }}</h3>
                <p class="muted">{{ config('referral.owner.title') }}</p>
                <ul class="contact-list">
                    <li><i data-lucide="mail"></i> <a href="mailto:{{ config('referral.owner.email') }}">{{ config('referral.owner.email') }}</a></li>
                    <li><i data-lucide="globe"></i> <a href="{{ config('referral.owner.website') }}" target="_blank" rel="noopener">{{ str_replace('https://', '', config('referral.owner.website')) }}</a></li>
                    <li><i data-lucide="linkedin"></i> <a href="{{ config('referral.owner.linkedin') }}" target="_blank" rel="noopener">LinkedIn</a></li>
                </ul>
                <hr>
                <p class="muted small"><strong>Need Revolut support?</strong> Use the in-app chat or the <a href="{{ config('referral.official.help') }}" target="_blank" rel="noopener">Revolut Business Help Centre</a>. I cannot see or change anything in your Revolut account.</p>
            </div>
        </div>
    </div>
</section>
@endsection
