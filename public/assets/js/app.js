/* Revolut Business referral guide — front-end behaviour (no framework) */
(function () {
    'use strict';

    const $ = (sel, ctx) => (ctx || document).querySelector(sel);
    const $$ = (sel, ctx) => Array.from((ctx || document).querySelectorAll(sel));

    /* Icons ------------------------------------------------------------- */
    function renderIcons() {
        if (window.lucide && typeof window.lucide.createIcons === 'function') {
            window.lucide.createIcons();
        }
    }

    /* Header ------------------------------------------------------------ */
    function initHeader() {
        const header = $('#siteHeader');
        const toggle = $('#navToggle');
        const links = $('#navLinks');
        if (!header) return;

        const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });

        if (toggle && links) {
            toggle.addEventListener('click', () => {
                const open = links.classList.toggle('is-open');
                toggle.setAttribute('aria-expanded', String(open));
            });
        }

        $$('.nav-dropdown').forEach((dd) => {
            const btn = $('button', dd);
            if (!btn) return;
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const open = dd.classList.toggle('is-open');
                btn.setAttribute('aria-expanded', String(open));
            });
            document.addEventListener('click', (e) => {
                if (!dd.contains(e.target)) {
                    dd.classList.remove('is-open');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    dd.classList.remove('is-open');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }

    /* Scroll reveal ----------------------------------------------------- */
    function initReveal() {
        const items = $$('.reveal');
        if (!items.length) return;
        if (!('IntersectionObserver' in window)) {
            items.forEach((el) => el.classList.add('is-visible'));
            return;
        }
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        items.forEach((el) => io.observe(el));
    }

    /* Animated counters ------------------------------------------------- */
    function initCounters() {
        const nodes = $$('[data-counter]');
        if (!nodes.length) return;
        const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        nodes.forEach((el) => {
            const target = parseFloat(el.dataset.counter || '0');
            const prefix = el.dataset.prefix || '';
            const decimals = parseInt(el.dataset.decimals || '0', 10);
            const fmt = (v) => prefix + v.toLocaleString(undefined, { minimumFractionDigits: decimals, maximumFractionDigits: decimals });
            if (reduce) { el.textContent = fmt(target); return; }

            const duration = 1600;
            const start = performance.now();
            const tick = (now) => {
                const t = Math.min(1, (now - start) / duration);
                const eased = 1 - Math.pow(1 - t, 3);
                el.textContent = fmt(target * eased);
                if (t < 1) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        });
    }

    /* FAQ accordion ----------------------------------------------------- */
    function initAccordion() {
        $$('[data-accordion]').forEach((list) => {
            $$('.faq-q', list).forEach((btn) => {
                btn.addEventListener('click', () => {
                    const panel = document.getElementById(btn.getAttribute('aria-controls'));
                    const open = btn.getAttribute('aria-expanded') === 'true';
                    // Close siblings for a tidy single-open accordion.
                    $$('.faq-q', list).forEach((other) => {
                        if (other !== btn) {
                            other.setAttribute('aria-expanded', 'false');
                            const p = document.getElementById(other.getAttribute('aria-controls'));
                            if (p) p.hidden = true;
                        }
                    });
                    btn.setAttribute('aria-expanded', String(!open));
                    if (panel) panel.hidden = open;
                });
            });
        });
    }

    /* Tabs -------------------------------------------------------------- */
    function initTabs() {
        $$('[data-tabs]').forEach((root) => {
            const tabs = $$('[data-tab]', root);
            const panels = $$('[data-panel]', root);
            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    const key = tab.dataset.tab;
                    tabs.forEach((t) => {
                        const active = t === tab;
                        t.classList.toggle('is-active', active);
                        t.setAttribute('aria-selected', String(active));
                    });
                    panels.forEach((p) => p.classList.toggle('is-active', p.dataset.panel === key));
                    renderIcons();
                });
            });
        });
    }

    /* Readiness checklist (state kept in localStorage only) ------------- */
    function initChecklist() {
        const root = $('[data-checklist]');
        if (!root) return;
        const boxes = $$('input[type="checkbox"]', root);
        const bar = $('[data-progress-bar]', root);
        const label = $('[data-progress-label]', root);
        const KEY = 'rb-readiness';

        let saved = [];
        try { saved = JSON.parse(localStorage.getItem(KEY) || '[]'); } catch (_) { saved = []; }
        boxes.forEach((b, i) => { b.checked = !!saved[i]; });

        const update = () => {
            const done = boxes.filter((b) => b.checked).length;
            const pct = Math.round((done / boxes.length) * 100);
            if (bar) bar.style.width = pct + '%';
            if (label) label.textContent = done === boxes.length
                ? 'All set. You are ready to apply.'
                : `${done} of ${boxes.length} ready`;
            try { localStorage.setItem(KEY, JSON.stringify(boxes.map((b) => b.checked))); } catch (_) { /* ignore */ }
        };
        boxes.forEach((b) => b.addEventListener('change', update));
        update();
    }

    /* Illustrative FX widget (sample rates, clearly labelled) ----------- */
    function initFx() {
        const root = $('[data-fx]');
        if (!root) return;
        // Sample mid-market style rates relative to GBP. Not live data.
        const rates = { GBP: 1, EUR: 1.17, USD: 1.27 };
        const symbols = { GBP: '£', EUR: '€', USD: '$' };
        const amount = $('[data-fx-amount]', root);
        const from = $('[data-fx-from]', root);
        const to = $('[data-fx-to]', root);
        const out = $('[data-fx-result]', root);
        const swap = $('[data-fx-swap]', root);

        const calc = () => {
            const a = parseFloat(amount.value);
            if (!isFinite(a) || a < 0) { out.textContent = '—'; return; }
            const result = (a / rates[from.value]) * rates[to.value];
            out.textContent = symbols[to.value] + result.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        };
        [amount, from, to].forEach((el) => el.addEventListener('input', calc));
        if (swap) swap.addEventListener('click', () => {
            const f = from.value; from.value = to.value; to.value = f; calc();
        });
        calc();
    }

    /* Boot -------------------------------------------------------------- */
    function boot() {
        renderIcons();
        initHeader();
        initReveal();
        initCounters();
        initAccordion();
        initTabs();
        initChecklist();
        initFx();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
