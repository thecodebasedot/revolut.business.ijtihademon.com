@extends('layouts.app')

@section('content')
@include('components.page-hero', [
    'eyebrow' => 'FAQ',
    'icon' => 'help-circle',
    'heading' => 'Frequently asked questions',
    'lead' => 'Answers about Revolut Business, eligibility, the referral link and this website. Can\'t find yours? Use the contact page.',
])

<section class="section">
    <div class="container narrow reveal">
        @include('components.faq-list', ['faqs' => $faqs])
    </div>
</section>

<script type="application/ld+json">{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => collect($faqs)->map(fn ($f) => [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ])->all(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

@include('components.cta', ['src' => 'faq'])
@endsection
