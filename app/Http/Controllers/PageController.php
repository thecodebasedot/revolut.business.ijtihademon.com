<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Revolut Business Referral Guide',
            'description' => 'An independent guide to Revolut Business: multi-currency accounts, business cards, payments and expense management. Open your account through my referral link.',
            'features' => $this->features(),
            'steps' => $this->steps(),
            'faqs' => array_slice($this->faqs(), 0, 4),
        ]);
    }

    public function businessAccount(): View
    {
        return view('pages.business-account', [
            'title' => 'Business Account',
            'description' => 'Who can open a Revolut Business account, what you need to prepare and how the application process works.',
            'steps' => $this->steps(),
        ]);
    }

    public function businessCards(): View
    {
        return view('pages.business-cards', [
            'title' => 'Business Cards',
            'description' => 'Physical and virtual Revolut Business cards for you and your team, with spending limits and instant controls.',
        ]);
    }

    public function payments(): View
    {
        return view('pages.payments', [
            'title' => 'Payments',
            'description' => 'Send and receive business payments locally and internationally with Revolut Business: transfers, bulk payments, invoices and payment links.',
        ]);
    }

    public function multiCurrency(): View
    {
        return view('pages.multi-currency', [
            'title' => 'Multi-Currency Accounts',
            'description' => 'Hold, exchange and manage multiple currencies from one Revolut Business account.',
        ]);
    }

    public function expenseManagement(): View
    {
        return view('pages.expense-management', [
            'title' => 'Expense Management',
            'description' => 'Team spending controls, receipt capture, approvals and accounting integrations in Revolut Business.',
        ]);
    }

    public function pricing(): View
    {
        return view('pages.pricing', [
            'title' => 'Pricing',
            'description' => 'An overview of Revolut Business plan tiers. Current fees and limits are always published on the official Revolut pricing page.',
            'plans' => $this->plans(),
        ]);
    }

    public function howItWorks(): View
    {
        return view('pages.how-it-works', [
            'title' => 'How It Works',
            'description' => 'A four-step walkthrough of opening a Revolut Business account through this referral guide.',
            'steps' => $this->steps(),
        ]);
    }

    public function faq(): View
    {
        return view('pages.faq', [
            'title' => 'FAQ',
            'description' => 'Frequently asked questions about Revolut Business, eligibility, the referral link and this website.',
            'faqs' => $this->faqs(),
        ]);
    }

    public function referralDisclosure(): View
    {
        return view('pages.referral-disclosure', [
            'title' => 'Referral Disclosure',
            'description' => 'How the referral link on this website works, and why this site is not the official Revolut website.',
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'About Ijtihad Emon',
            'description' => 'Ijtihad Emon works across software development, data/AI/ML and cybersecurity, and runs this independent Revolut Business referral guide.',
        ]);
    }

    public function privacy(): View
    {
        return view('pages.privacy', [
            'title' => 'Privacy Policy',
            'description' => 'What data this website collects and how it is used.',
        ]);
    }

    /**
     * @return array<int, array{icon: string, title: string, text: string, route: string}>
     */
    private function features(): array
    {
        return [
            ['icon' => 'building-2', 'title' => 'Business Account', 'text' => 'A business current account with local account details and everything managed from the app or web dashboard.', 'route' => 'business-account'],
            ['icon' => 'credit-card', 'title' => 'Business Cards', 'text' => 'Physical and virtual cards for you and your team, with per-card limits, freeze and category controls.', 'route' => 'business-cards'],
            ['icon' => 'send', 'title' => 'Payments', 'text' => 'Send local and international transfers, pay in bulk, and get paid with invoices and payment links.', 'route' => 'payments'],
            ['icon' => 'globe', 'title' => 'Multi-Currency', 'text' => 'Hold and exchange multiple currencies in one place, so you can pay suppliers and get paid like a local.', 'route' => 'multi-currency'],
            ['icon' => 'receipt', 'title' => 'Expense Management', 'text' => 'Capture receipts, set approval flows and sync spending to your accounting software.', 'route' => 'expense-management'],
            ['icon' => 'shield-check', 'title' => 'Security & Control', 'text' => 'Role-based team permissions, two-factor authentication and real-time notifications on every transaction.', 'route' => 'business-account'],
        ];
    }

    /**
     * @return array<int, array{title: string, text: string}>
     */
    private function steps(): array
    {
        return [
            ['title' => 'Check eligibility', 'text' => 'Make sure your company is registered and active in a country Revolut Business supports, and that your industry is accepted.'],
            ['title' => 'Prepare your documents', 'text' => 'Have your company registration details, proof of identity for directors and owners, and a short description of your business ready.'],
            ['title' => 'Apply through the referral link', 'text' => 'Click "Open a Revolut Business Account" on this site. The sign-up opens on business.revolut.com and takes around 10 minutes to complete.'],
            ['title' => 'Verify and start using the account', 'text' => 'Revolut reviews the application. Once approved, you can order cards, add team members and start sending and receiving payments.'],
        ];
    }

    /**
     * @return array<int, array{name: string, for: string, points: array<int, string>}>
     */
    private function plans(): array
    {
        return [
            ['name' => 'Basic', 'for' => 'Freelancers and small companies that are just getting started.', 'points' => ['Business account and cards', 'Local and international payments', 'Core expense tools']],
            ['name' => 'Grow', 'for' => 'Growing teams that need more allowances and team features.', 'points' => ['Higher free allowances', 'More team members and permissions', 'Extra expense and integration features']],
            ['name' => 'Scale', 'for' => 'Established businesses with high payment volumes.', 'points' => ['Larger free allowances', 'Advanced controls and analytics', 'Priority support']],
            ['name' => 'Enterprise', 'for' => 'Large organisations with custom requirements.', 'points' => ['Custom pricing', 'Dedicated account management', 'Tailored limits and integrations']],
        ];
    }

    /**
     * @return array<int, array{q: string, a: string}>
     */
    private function faqs(): array
    {
        return [
            ['q' => 'Is this the official Revolut website?', 'a' => 'No. This is an independent guide operated by Ijtihad Emon. The sign-up itself happens on business.revolut.com, and any account you open is with Revolut directly.'],
            ['q' => 'What happens when I click the referral link?', 'a' => 'You are taken to the official Revolut Business sign-up page with my referral code attached. If your business is approved and meets the conditions of the referral campaign, I may receive a reward from Revolut. It never costs you anything extra.'],
            ['q' => 'Do I get a reward too?', 'a' => 'It depends on the campaign Revolut is running when you sign up. Rewards, eligibility and conditions are set by Revolut and can change, so I do not promise a specific amount. Always check the offer shown on the official sign-up page.'],
            ['q' => 'Who can open a Revolut Business account?', 'a' => 'Registered companies and, in some regions, sole traders located in countries Revolut Business supports. Some industries are excluded. The definitive eligibility rules are on the official Revolut Business site.'],
            ['q' => 'How long does the application take?', 'a' => 'Filling in the form usually takes around 10 minutes. Revolut then reviews your documents, which can take from a few hours to several business days depending on your company.'],
            ['q' => 'Which documents will I need?', 'a' => 'Typically your company registration number, registered address, details of directors and beneficial owners, and a photo ID for each of them. Revolut may ask for extra documents during review.'],
            ['q' => 'How much does Revolut Business cost?', 'a' => 'Revolut Business has several plans, including a free tier. Fees and allowances change over time, so this site links to the official pricing page rather than listing numbers that could go out of date.'],
            ['q' => 'Can you help me with my application or account?', 'a' => 'I can answer general questions about the process. I cannot access your application or account. For account issues, contact Revolut Business support through the app.'],
            ['q' => 'Do you collect my data when I use this site?', 'a' => 'Only what you send through the contact form, plus anonymous click logging on the referral button. See the Privacy Policy page for details.'],
        ];
    }
}
