# Bunbukan Europe (theme)

WordPress theme for **Bunbukan Europe** — official European representation of Bunbukan Okinawa. Traditional Okinawan Martial Arts: Ryūkyū Kobudō.

**Theme name:** Bunbukan Europe  
**Text domain:** `bunbukan-europe`  
**Author:** Bunbukan Europe Organization  
**Author URI:** https://bunbukan.eu  
**Version:** 1.0.0  

---

## Description

Modern, responsive theme inspired by [kabuki.es](https://kabuki.es), with a dark/red palette and custom typography (Naganoshi, Bebas Neue, Noto Sans JP). Structure based on Nutriflow, adapted for traditional Okinawan martial arts and European representation.

---

## Structure

- **Templates:** `front-page.php`, `header.php`, `footer.php`, `index.php`, `sidebar.php`
- **Template parts:** `template-parts/` (e.g. cookie consent, content templates)
- **Inc:** `inc/pods-migration-data.php` — Pods migration and pre-fill helpers (Tools → Migration Pods (Europe))
- **Assets:** `assets/js/` (includes `locations-map.js`), `assets/images/`, `assets/fonts/`
- **Languages:** `languages/` — translation-ready with `.pot` and locale files (EN, FR, NL)

---

## Features

- Custom front page and layout consistent with Bunbukan Brussels theme
- **Pods integration:** same field structure as Brussels; use **Tools → Migration Pods (Europe)** to pre-fill the front page with Europe default content (hero, about, disciplines, contact, affiliations). Only empty fields are filled.
- **Translation-ready** with text domain `bunbukan-europe`; `.pot` and locale files (EN, FR, NL) in `languages/`
- **Cookie consent banner** (template part + JS); respects user choice and stores preference
- **Language selector** in footer (Polylang integration or locale fallback: FR, EN, NL, JA)
- Locations map functionality (`assets/js/locations-map.js`)
- Asset helpers and optional sync from a React build when available

---

## Requirements

- WordPress (version supported by your environment)
- PHP (version required by WordPress)
- **Recommended:** [Pods – Custom Content Types and Fields](https://pods.io/) — for editable front-page content and migration (Tools → Migration Pods (Europe))
- **Recommended:** [Polylang](https://wordpress.org/plugins/polylang/) or [WPML](https://wpml.org/) for full multilingual support
- Optional: React build for shared assets

After activating the theme, set a front page in **Settings → Reading**, then run **Tools → Migration Pods (Europe)** once to pre-fill Pods fields with Europe defaults. Edit the front page to customize content.

Translations are loaded from `languages/bunbukan-europe-{locale}.po` (compile to `.mo` with Poedit or `msgfmt` for production).

---

## License

**Proprietary — All rights reserved.** This theme is not open source. It is for use by Bunbukan Europe / the karate club only. No redistribution or reuse without permission.
