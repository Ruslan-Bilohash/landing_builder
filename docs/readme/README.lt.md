**Kalbos:** [English](README.en.md) · [Українська](README.uk.md) · [Norsk](README.no.md) · [Русский](README.ru.md) · [Deutsch](README.de.md) · [Polski](README.pl.md) · [Svenska](README.sv.md) · [Lietuvių](README.lt.md)

# BILOHASH Landing Builder

**Tiesioginė demonstracija:** https://bilohash.com/landing_builder/  
**Kūrėjas (be išsaugojimo serveryje):** https://bilohash.com/landing_builder/builder.php  
**30 dienų diegimas:** https://bilohash.com/landing_builder/demo-install.php  

Vizualus nukreipimo puslapių kūrėjas Elementor stiliumi, išskirtas iš [BILOHASH Hosting](https://bilohash.com/hosting/) hPanel. Vilkimo ir numetimo valdikliai, adaptyvi peržiūra, `index.html` eksportas — WordPress nereikalingas.

| Paketas | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Demo ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Ekrano nuotraukos

### Pagrindinis kūrėjas — valdikliai, struktūra, tiesioginė drobė

![Pagrindinis kūrėjas](../screenshots/builder_website_main.webp)

### Blokų redaktorius ir temos nustatymai

![Blokų redaktorius](../screenshots/builder_website.webp)

### Publikuota HTML išvestis

![HTML eksportas](../screenshots/builder_website_html.webp)

## Funkcijos

- **40+ valdiklių** — hero, funkcijos, galerija, kainos, DUK, slankiklis, messengeriai, CTA, komanda ir daugiau
- **Puslapių šablonai** — verslas, portfolio, restoranas, renginiai
- **Adaptyvi peržiūra** — darbalaukio, planšetės, mobilioji drobė
- **HTML eksportas** — atsisiųskite paruoštą `index.html` bet kuriam hostingui
- **Temos** — 12 akcentinių spalvų, piktogramų rinkiniai, nav/footer stiliai
- **Tiesioginė demonstracija** — pakeitimai lieka naršyklėje (`localStorage`); be išsaugojimo serveryje
- **Daugiakalbis UI** — anglų, ukrainiečių, norvegų (kūrėjo eilutės iš Hosting skydelio)

## vs Business Landing CMS

| | **Landing Builder** (šis repozitoriumas) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Fokusas | Vizualus blokų kūrėjas, greiti vieno puslapio tinklalapiai | Pilna CMS: šablonai, admin, potencialūs klientai, sąskaitos |
| Išsaugojimas | HTML eksportas / naršyklės juodraštis | Duomenų bazė + administravimo skydelis |
| Demo | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Greitas startas

### Tiesioginė demonstracija (be diegimo)

Atidarykite `/builder.php` demonstracinėje svetainėje. Naudokite **Export HTML**, kad atsisiųstumėte puslapį.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### Įmontuotas PHP serveris

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Hosting hPanel integracija

Tas pats variklis pateikiamas **BILOHASH Hosting** sistemoje `panel/landing-builder.php` su Save/Publish į `public_html/{user}/index.html`.

## 30 dienų demonstracinė licencija

Atsisiųskite pasirašytą ZIP iš GitHub Releases arba [BILOHASH klientų kabineto](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder).  
Vertinimo laikotarpis: **30 dienų**. Produkcija: info@bilohash.com

## Ekosistema

Dalė [BILOHASH CMS ekosistemos](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance ir daugiau.

## Licencija

Nuosavybinė — © BILOHASH / Ruslan Bilohash. Demonstracija vertinimui; komerciniam naudojimui reikalinga licencija.