<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_submission_is_stored(): void
    {
        $this->post('/contact', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Question about eligibility',
            'message' => 'Can a sole trader in the UK apply?',
        ])->assertRedirect('/contact')->assertSessionHas('status');

        $this->assertDatabaseHas('contact_messages', [
            'email' => 'test@example.com',
            'subject' => 'Question about eligibility',
        ]);
    }

    public function test_invalid_submission_is_rejected(): void
    {
        $this->from('/contact')->post('/contact', [
            'name' => '',
            'email' => 'not-an-email',
            'subject' => '',
            'message' => 'short',
        ])->assertRedirect('/contact')->assertSessionHasErrors(['name', 'email', 'subject', 'message']);

        $this->assertSame(0, ContactMessage::count());
    }

    public function test_honeypot_submissions_are_silently_dropped(): void
    {
        $this->post('/contact', [
            'name' => 'Bot',
            'email' => 'bot@example.com',
            'subject' => 'Spam',
            'message' => 'Buy things now please thanks',
            'website' => 'http://spam.example',
        ])->assertRedirect('/contact');

        $this->assertSame(0, ContactMessage::count());
    }
}
