**Språk:** [English](README.en.md) · [Українська](README.uk.md) · [Norsk](README.no.md) · [Русский](README.ru.md) · [Deutsch](README.de.md) · [Polski](README.pl.md) · [Svenska](README.sv.md) · [Lietuvių](README.lt.md)

# BILOHASH Landing Builder

**Live demo:** https://bilohash.com/landing_builder/  
**Byggare (ingen serverlagring):** https://bilohash.com/landing_builder/builder.php  
**30-dagars installation:** https://bilohash.com/landing_builder/demo-install.php  

Visuell landningssidebyggare i Elementor-stil, extraherad från [BILOHASH Hosting](https://bilohash.com/hosting/) hPanel. Dra-och-släpp-widgets, responsiv förhandsgranskning, exportera `index.html` — WordPress krävs inte.

| Paket | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Demo ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Skärmdumpar

### Huvudbyggare — widgets, struktur, live-canvas

![Huvudbyggare](../screenshots/builder_website_main.webp)

### Blockredigerare och temainställningar

![Blockredigerare](../screenshots/builder_website.webp)

### Publicerad HTML-utdata

![HTML-export](../screenshots/builder_website_html.webp)

## Funktioner

- **40+ widgets** — hero, funktioner, galleri, priser, FAQ, slider, meddelandetjänster, CTA, team och mer
- **Sidmallar** — företag, portfolio, restaurang, evenemang
- **Responsiv förhandsgranskning** — desktop-, surfplatta-, mobil-canvas
- **Exportera HTML** — ladda ner färdig `index.html` för valfri värd
- **Teman** — 12 accentfärger, ikonuppsättningar, nav/footer-stilar
- **Live demo** — ändringar sparas i webbläsaren (`localStorage`); ingen serverpersistens
- **Flerspråkigt gränssnitt** — engelska, ukrainska, norska (byggarsträngar från Hosting-panelen)

## vs Business Landing CMS

| | **Landing Builder** (detta repo) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Fokus | Visuell blockbyggare, snabba one-pagers | Fullständigt CMS: förinställningar, admin, leads, fakturor |
| Spara | Exportera HTML / webbläsarutkast | Databas + adminpanel |
| Demo | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Snabbstart

### Live demo (ingen installation)

Öppna `/builder.php` på demosidan. Använd **Export HTML** för att ladda ner din sida.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### PHP inbyggd server

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Hosting hPanel-integration

Samma motor levereras i **BILOHASH Hosting** på `panel/landing-builder.php` med Save/Publish till `public_html/{user}/index.html`.

## 30-dagars demolicens

Ladda ner signerad ZIP från GitHub Releases eller [BILOHASH kundkabinett](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder).  
Utvärderingsperiod: **30 dagar**. Produktion: info@bilohash.com

## Ekosystem

Del av [BILOHASH CMS-ekosystemet](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance och mer.

## Licens

Proprietär — © BILOHASH / Ruslan Bilohash. Demo för utvärdering; kommersiell användning kräver licens.