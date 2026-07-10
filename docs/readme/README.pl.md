**Języki:** [English](README.en.md) · [Українська](README.uk.md) · [Norsk](README.no.md) · [Русский](README.ru.md) · [Deutsch](README.de.md) · [Polski](README.pl.md) · [Svenska](README.sv.md) · [Lietuvių](README.lt.md)

# BILOHASH Landing Builder

**Demo na żywo:** https://bilohash.com/landing_builder/  
**Kreator (bez zapisu na serwerze):** https://bilohash.com/landing_builder/builder.php  
**Instalacja 30-dniowa:** https://bilohash.com/landing_builder/demo-install.php  

Wizualny kreator stron docelowych w stylu Elementor, wyodrębniony z hPanel [BILOHASH Hosting](https://bilohash.com/hosting/). Widżety drag-and-drop, responsywny podgląd, eksport `index.html` — WordPress nie jest wymagany.

| Pakiet | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Demo ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Zrzuty ekranu

### Główny kreator — widżety, struktura, żywe płótno

![Główny kreator](../screenshots/builder_website_main.webp)

### Edytor bloków i ustawienia motywu

![Edytor bloków](../screenshots/builder_website.webp)

### Opublikowany wynik HTML

![Eksport HTML](../screenshots/builder_website_html.webp)

## Funkcje

- **40+ widżetów** — hero, funkcje, galeria, cennik, FAQ, slider, komunikatory, CTA, zespół i więcej
- **Szablony stron** — biznes, portfolio, restauracja, wydarzenia
- **Responsywny podgląd** — płótno desktop, tablet, mobile
- **Eksport HTML** — pobierz gotowy `index.html` na dowolny hosting
- **Motywy** — 12 kolorów akcentu, zestawy ikon, style nav/footer
- **Demo na żywo** — zmiany pozostają w przeglądarce (`localStorage`); bez zapisu na serwerze
- **Wielojęzyczny interfejs** — angielski, ukraiński, norweski (ciągi kreatora z panelu Hosting)

## vs Business Landing CMS

| | **Landing Builder** (to repozytorium) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Fokus | Wizualny kreator bloków, szybkie one-pagery | Pełne CMS: presety, admin, leady, faktury |
| Zapis | Eksport HTML / szkic w przeglądarce | Baza danych + panel admina |
| Demo | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Szybki start

### Demo na żywo (bez instalacji)

Otwórz `/builder.php` na stronie demo. Użyj **Export HTML**, aby pobrać stronę.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### Wbudowany serwer PHP

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Integracja z Hosting hPanel

Ten sam silnik jest dostępny w **BILOHASH Hosting** pod `panel/landing-builder.php` z Save/Publish do `public_html/{user}/index.html`.

## 30-dniowa licencja demo

Pobierz podpisany ZIP z GitHub Releases lub z [kabinetu klienta BILOHASH](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder).  
Okres ewaluacji: **30 dni**. Produkcja: info@bilohash.com

## Ekosystem

Część [ekosystemu BILOHASH CMS](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance i więcej.

## Licencja

Własnościowa — © BILOHASH / Ruslan Bilohash. Demo do ewaluacji; użycie komercyjne wymaga licencji.