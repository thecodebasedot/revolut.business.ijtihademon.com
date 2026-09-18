<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/business-account', [PageController::class, 'businessAccount'])->name('business-account');
Route::get('/business-cards', [PageController::class, 'businessCards'])->name('business-cards');
Route::get('/payments', [PageController::class, 'payments'])->name('payments');
Route::get('/multi-currency', [PageController::class, 'multiCurrency'])->name('multi-currency');
Route::get('/expense-management', [PageController::class, 'expenseManagement'])->name('expense-management');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/referral-disclosure', [PageController::class, 'referralDisclosure'])->name('referral-disclosure');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

// Referral redirect — every CTA points here so the link lives in one place.
Route::get('/go', [ReferralController::class, 'redirect'])->name('go');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
