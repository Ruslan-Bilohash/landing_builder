**Språk:** [English](README.en.md) · [Українська](README.uk.md) · [Norsk](README.no.md) · [Русский](README.ru.md) · [Deutsch](README.de.md) · [Polski](README.pl.md) · [Svenska](README.sv.md) · [Lietuvių](README.lt.md)

# BILOHASH Landing Builder

**Live demo:** https://bilohash.com/landing_builder/  
**Bygger (ingen lagring på server):** https://bilohash.com/landing_builder/builder.php  
**30-dagers installasjon:** https://bilohash.com/landing_builder/demo-install.php  

Visuell landingsside-bygger i Elementor-stil, hentet fra [BILOHASH Hosting](https://bilohash.com/hosting/) hPanel. Dra-og-slipp-widgets, responsiv forhåndsvisning, eksporter `index.html` — WordPress er ikke nødvendig.

| Pakke | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Demo ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Skjermbilder

### Hovedbygger — widgets, struktur, live lerret

![Hovedbygger](../screenshots/builder_website_main.webp)

### Blokkredigerer og temainnstillinger

![Blokkredigerer](../screenshots/builder_website.webp)

### Publisert HTML-utdata

![HTML-eksport](../screenshots/builder_website_html.webp)

## Funksjoner

- **40+ widgets** — hero, funksjoner, galleri, priser, FAQ, slider, meldingstjenester, CTA, team og mer
- **Sidesmaler** — forretning, portefølje, restaurant, arrangementer
- **Responsiv forhåndsvisning** — desktop, nettbrett, mobil-lerret
- **Eksporter HTML** — last ned ferdig `index.html` for enhver vert
- **Temaer** — 12 aksentfarger, ikonsett, nav/footer-stiler
- **Live demo** — endringer lagres i nettleseren (`localStorage`); ingen serverlagring
- **Flerspråklig grensesnitt** — engelsk, ukrainsk, norsk (byggerstrenger fra Hosting-panelet)

## vs Business Landing CMS

| | **Landing Builder** (dette repoet) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Fokus | Visuell blokkbygger, raske én-siders sider | Full CMS: forhåndsinnstillinger, admin, leads, fakturaer |
| Lagring | Eksporter HTML / nettleserutkast | Database + adminpanel |
| Demo | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Hurtigstart

### Live demo (ingen installasjon)

Åpne `/builder.php` på demo-siden. Bruk **Export HTML** for å laste ned siden din.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### PHP innebygd server

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Hosting hPanel-integrasjon

Samme motor leveres i **BILOHASH Hosting** på `panel/landing-builder.php` med Save/Publish til `public_html/{user}/index.html`.

## 30-dagers demolisens

Last ned signert ZIP fra GitHub Releases eller [BILOHASH kundekabinett](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder).  
Evalueringsperiode: **30 dager**. Produksjon: info@bilohash.com

## Økosystem

Del av [BILOHASH CMS-økosystemet](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance og mer.

## Lisens

**Kun ikke-kommersiell bruk** — du kan se, studere, forke og kjøre demoen for personlig læring og evaluering.

**Kommersiell bruk krever betalt BILOHASH-lisens** (klientsider, SaaS, videresalg, produksjon utover 30-dagers demo).

- [LICENSE](../../LICENSE) (engelsk)
- [LICENSE-uk.md](../../LICENSE-uk.md) · [LICENSE-ru.md](../../LICENSE-ru.md) · [LICENSE-no.md](../../LICENSE-no.md) · [LICENSE-de.md](../../LICENSE-de.md) · [LICENSE-pl.md](../../LICENSE-pl.md) · [LICENSE-sv.md](../../LICENSE-sv.md) · [LICENSE-lt.md](../../LICENSE-lt.md)

Kontakt: [rbilohash@gmail.com](mailto:rbilohash@gmail.com) · [ecosystem/join.php](https://bilohash.com/ecosystem/join.php)