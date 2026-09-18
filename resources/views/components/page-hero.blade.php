@props(['eyebrow', 'heading', 'lead', 'icon' => null])
<section class="page-hero">
    <div class="container">
        <p class="eyebrow">@if($icon)<i data-lucide="{{ $icon }}"></i>@endif {{ $eyebrow }}</p>
        <h1>{{ $heading }}</h1>
        <p class="lead">{{ $lead }}</p>
    </div>
</section>
