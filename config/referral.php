<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Revolut Business referral link
    |--------------------------------------------------------------------------
    |
    | Every "Open a Revolut Business Account" CTA on the site points to the
    | /go route, which redirects here. Override via REFERRAL_URL in .env.
    |
    */

    'url' => env(
        'REFERRAL_URL',
        'https://business.revolut.com/signup?promo=C2B-SEP2-26-AR-H2&ext=ijtiharrj9&context=C2B_REFERRAL'
    ),

    /*
    |--------------------------------------------------------------------------
    | Official Revolut links (used for "see official" references only)
    |--------------------------------------------------------------------------
    */

    'official' => [
        'business' => 'https://www.revolut.com/business/',
        'pricing' => 'https://www.revolut.com/business/pricing/',
        'help' => 'https://help.revolut.com/business/',
        'legal' => 'https://www.revolut.com/legal/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Site owner
    |--------------------------------------------------------------------------
    */

    'owner' => [
        'name' => env('OWNER_NAME', 'Ijtihad Emon'),
        'title' => 'Software Developer · Data/AI/ML · Cybersecurity (CEH)',
        'email' => env('OWNER_EMAIL', 'ijtihademon@gmail.com'),
        'website' => env('OWNER_WEBSITE', 'https://ijtihademon.com'),
        'linkedin' => env('OWNER_LINKEDIN', 'https://www.linkedin.com/in/ijtihademon'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Disclosure text (shown on every page footer + disclosure page)
    |--------------------------------------------------------------------------
    */

    'disclosure' => 'This website is independently operated by Ijtihad Emon and is not the official Revolut website. '
        .'If you use the referral link on this website and meet the applicable Revolut referral requirements, '
        .'I may receive a referral reward. Revolut, the Revolut logo and Revolut Business are trademarks of Revolut Ltd.',

];
