<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * @return array<string, array{string, string}>
     */
    public static function pages(): array
    {
        return [
            'home' => ['/', 'Open a Revolut Business Account'],
            'business account' => ['/business-account', 'Who can apply'],
            'business cards' => ['/business-cards', 'Virtual cards'],
            'payments' => ['/payments', 'Bulk payments'],
            'multi currency' => ['/multi-currency', 'One account, many currencies'],
            'expense management' => ['/expense-management', 'Receipt capture'],
            'pricing' => ['/pricing', 'Why no prices here?'],
            'how it works' => ['/how-it-works', 'step by step'],
            'faq' => ['/faq', 'Is this the official Revolut website?'],
            'referral disclosure' => ['/referral-disclosure', 'not the official Revolut website'],
            'about' => ['/about', 'Ijtihad Emon'],
            'contact' => ['/contact', 'Send a message'],
            'privacy' => ['/privacy', 'What is collected'],
        ];
    }

    #[DataProvider('pages')]
    public function test_page_renders(string $uri, string $expected): void
    {
        $this->get($uri)
            ->assertOk()
            ->assertSee($expected)
            ->assertSee(route('go'), false);
    }

    public function test_every_page_carries_the_disclosure(): void
    {
        foreach (self::pages() as [$uri]) {
            $this->get($uri)->assertSee('is not the official Revolut website');
        }
    }

    public function test_sitemap_lists_public_pages(): void
    {
        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee(route('home'), false)
            ->assertSee(route('faq'), false)
            ->assertDontSee(route('go'), false);
    }
}
