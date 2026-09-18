<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReferralRedirectTest extends TestCase
{
    public function test_go_redirects_to_the_configured_referral_link(): void
    {
        config(['referral.url' => 'https://business.revolut.com/signup?promo=TEST&ext=abc']);

        $this->get('/go?src=test')
            ->assertStatus(302)
            ->assertRedirect('https://business.revolut.com/signup?promo=TEST&ext=abc')
            ->assertHeader('Cache-Control', 'no-store, private');
    }

    public function test_default_referral_link_contains_the_owner_code(): void
    {
        $this->assertStringContainsString('ext=ijtiharrj9', config('referral.url'));
        $this->assertStringContainsString('context=C2B_REFERRAL', config('referral.url'));
    }
}
