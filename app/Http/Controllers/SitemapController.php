<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $routes = [
            'home', 'business-account', 'business-cards', 'payments', 'multi-currency',
            'expense-management', 'pricing', 'how-it-works', 'faq', 'referral-disclosure',
            'about', 'contact', 'privacy',
        ];

        $xml = view('sitemap', [
            'urls' => collect($routes)->map(fn (string $name) => route($name)),
        ])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
