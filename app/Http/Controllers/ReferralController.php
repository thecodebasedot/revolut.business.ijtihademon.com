<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReferralController extends Controller
{
    /**
     * Redirect the visitor to the Revolut Business referral sign-up page.
     */
    public function redirect(Request $request): RedirectResponse
    {
        Log::channel('single')->info('referral.click', [
            'source' => $request->query('src', 'unknown'),
            'referer' => $request->headers->get('referer'),
        ]);

        return redirect()->away(config('referral.url'), 302)
            ->header('Cache-Control', 'no-store')
            ->header('Referrer-Policy', 'no-referrer-when-downgrade');
    }
}
