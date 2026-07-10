**Sprachen:** [English](README.en.md) · [Українська](README.uk.md) · [Norsk](README.no.md) · [Русский](README.ru.md) · [Deutsch](README.de.md) · [Polski](README.pl.md) · [Svenska](README.sv.md) · [Lietuvių](README.lt.md)

# BILOHASH Landing Builder

**Live-Demo:** https://bilohash.com/landing_builder/  
**Builder (keine Server-Speicherung):** https://bilohash.com/landing_builder/builder.php  
**30-Tage-Installation:** https://bilohash.com/landing_builder/demo-install.php  

Visueller Landingpage-Builder im Elementor-Stil, extrahiert aus dem [BILOHASH Hosting](https://bilohash.com/hosting/) hPanel. Drag-and-Drop-Widgets, responsive Vorschau, Export von `index.html` — WordPress nicht erforderlich.

| Paket | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Demo ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Screenshots

### Haupt-Builder — Widgets, Struktur, Live-Canvas

![Haupt-Builder](../screenshots/builder_website_main.webp)

### Block-Editor und Theme-Einstellungen

![Block-Editor](../screenshots/builder_website.webp)

### Veröffentlichte HTML-Ausgabe

![HTML-Export](../screenshots/builder_website_html.webp)

## Funktionen

- **40+ Widgets** — Hero, Features, Galerie, Preise, FAQ, Slider, Messenger, CTA, Team und mehr
- **Seitenvorlagen** — Business, Portfolio, Restaurant, Events
- **Responsive Vorschau** — Desktop-, Tablet-, Mobile-Canvas
- **HTML exportieren** — fertige `index.html` für jeden Host herunterladen
- **Themes** — 12 Akzentfarben, Icon-Sets, Nav/Footer-Stile
- **Live-Demo** — Änderungen bleiben im Browser (`localStorage`); keine Server-Persistenz
- **Mehrsprachige UI** — Englisch, Ukrainisch, Norwegisch (Builder-Strings aus dem Hosting-Panel)

## vs Business Landing CMS

| | **Landing Builder** (dieses Repo) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Fokus | Visueller Block-Builder, schnelle One-Pager | Vollständiges CMS: Presets, Admin, Leads, Rechnungen |
| Speichern | HTML exportieren / Browser-Entwurf | Datenbank + Admin-Panel |
| Demo | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Schnellstart

### Live-Demo (ohne Installation)

Öffnen Sie `/builder.php` auf der Demo-Seite. Verwenden Sie **Export HTML**, um Ihre Seite herunterzuladen.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### PHP eingebauter Server

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Hosting hPanel-Integration

Dieselbe Engine ist in **BILOHASH Hosting** unter `panel/landing-builder.php` enthalten mit Save/Publish nach `public_html/{user}/index.html`.

## 30-Tage-Demolizenz

Laden Sie das signierte ZIP von GitHub Releases oder aus dem [BILOHASH-Kundenkabinett](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder) herunter.  
Evaluierungszeitraum: **30 Tage**. Produktion: info@bilohash.com

## Ökosystem

Teil des [BILOHASH CMS-Ökosystems](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance und mehr.

## Lizenz

Proprietär — © BILOHASH / Ruslan Bilohash. Demo zur Evaluierung; kommerzielle Nutzung erfordert eine Lizenz.