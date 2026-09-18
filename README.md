# revolut.business.ijtihademon.com

An independent **Revolut Business referral guide** website, built with **Laravel 13 (PHP 8.3+)**.

> **Disclosure:** This website is independently operated by Ijtihad Emon and is not the official Revolut website. If you use the referral link on this website and meet the applicable Revolut referral requirements, the site owner may receive a referral reward.

## Pages

| Route | Page |
|---|---|
| `/` | Home |
| `/business-account` | Business Account (eligibility + interactive readiness checklist) |
| `/business-cards` | Business Cards (physical / virtual tabs) |
| `/payments` | Payments |
| `/multi-currency` | Multi-Currency (illustrative exchange demo) |
| `/expense-management` | Expense Management |
| `/pricing` | Pricing (plan tiers, links to official pricing) |
| `/how-it-works` | How It Works |
| `/faq` | FAQ (accordion + FAQPage schema) |
| `/referral-disclosure` | Referral Disclosure |
| `/about` | About Ijtihad Emon |
| `/contact` | Contact form (stored in the database) |
| `/privacy` | Privacy Policy |
| `/go` | 302 redirect to the referral link (every CTA points here) |
| `/sitemap.xml` | XML sitemap |

## Stack

- Laravel 13, Blade templates, SQLite by default (any Laravel-supported DB works)
- Plain CSS + vanilla JS in `public/assets` (no Node build step required)
- Lucide icons (vendored locally), Inter from Google Fonts

## Local setup

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Then open <http://localhost:8000>.

## Configuration

All site-specific settings live in `config/referral.php` and can be overridden in `.env`:

| Variable | Purpose |
|---|---|
| `REFERRAL_URL` | The Revolut Business referral sign-up link |
| `OWNER_NAME`, `OWNER_EMAIL`, `OWNER_WEBSITE`, `OWNER_LINKEDIN` | Owner details shown on About / Contact |
| `APP_URL` | Public URL, used for canonical tags and the sitemap |

Contact form submissions are stored in the `contact_messages` table. Referral clicks are logged to `storage/logs/laravel.log` as `referral.click` with the `src` query parameter of the button that was clicked.

## Tests & lint

```bash
php artisan test
vendor/bin/pint --test
```

## Deployment

Point the web server document root at `public/`, set `APP_ENV=production`, `APP_DEBUG=false`, run `php artisan migrate --force` and `php artisan optimize`.

## License

MIT. See [LICENSE](LICENSE).
