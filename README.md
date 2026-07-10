# BILOHASH Landing Builder

**Live demo:** https://bilohash.com/landing_builder/  
**Builder (no server save):** https://bilohash.com/landing_builder/builder.php  
**30-day install:** https://bilohash.com/landing_builder/demo-install.php  

Elementor-style visual landing page builder extracted from [BILOHASH Hosting](https://bilohash.com/hosting/) hPanel. Drag-and-drop widgets, responsive preview, export `index.html` — no WordPress required.

| Package | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Demo ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Screenshots

### Main builder — widgets, structure, live canvas

![Main builder](docs/screenshots/builder_website_main.webp)

### Block editor and theme settings

![Block editor](docs/screenshots/builder_website.webp)

### Published HTML output

![HTML export](docs/screenshots/builder_website_html.webp)

## Features

- **40+ widgets** — hero, features, gallery, pricing, FAQ, slider, messengers, CTA, team, and more
- **Page templates** — business, portfolio, restaurant, events starters
- **Responsive preview** — desktop, tablet, mobile canvas
- **Export HTML** — download ready `index.html` for any host
- **Themes** — 12 accent colors, icon sets, nav/footer styles
- **Live demo** — changes stay in the browser (`localStorage`); no server persistence
- **Multilingual UI** — English, Ukrainian, Norwegian (builder strings from Hosting panel)

## vs Business Landing CMS

| | **Landing Builder** (this repo) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Focus | Visual block builder, fast one-pagers | Full CMS: presets, admin, leads, invoices |
| Save | Export HTML / browser draft | Database + admin panel |
| Demo | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Quick start

### Live demo (no install)

Open `/builder.php` on the demo site. Use **Export HTML** to download your page.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### PHP built-in server

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Hosting hPanel integration

The same engine ships inside **BILOHASH Hosting** at `panel/landing-builder.php` with Save/Publish to `public_html/{user}/index.html`.

## 30-day demo license

Download the signed ZIP from GitHub Releases or the [BILOHASH customer cabinet](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder).  
Evaluation period: **30 days**. Production: info@bilohash.com

## Ecosystem

Part of the [BILOHASH CMS ecosystem](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance, and more.

## License

Proprietary — © BILOHASH / Ruslan Bilohash. Demo for evaluation; commercial use requires a license.