**Языки:** [English](README.en.md) · [Українська](README.uk.md) · [Norsk](README.no.md) · [Русский](README.ru.md) · [Deutsch](README.de.md) · [Polski](README.pl.md) · [Svenska](README.sv.md) · [Lietuvių](README.lt.md)

# BILOHASH Landing Builder

**Живое демо:** https://bilohash.com/landing_builder/  
**Конструктор (без сохранения на сервере):** https://bilohash.com/landing_builder/builder.php  
**30-дневная установка:** https://bilohash.com/landing_builder/demo-install.php  

Визуальный конструктор лендингов в стиле Elementor, извлечённый из hPanel [BILOHASH Hosting](https://bilohash.com/hosting/). Виджеты drag-and-drop, адаптивный предпросмотр, экспорт `index.html` — WordPress не требуется.

| Пакет | URL |
|---------|-----|
| GitHub | https://github.com/Ruslan-Bilohash/landing_builder |
| Docker | `ghcr.io/ruslan-bilohash/landing_builder:latest` |
| Демо ZIP | GitHub Release `landing-builder-demo-30d-*.zip` |

## Скриншоты

### Главный конструктор — виджеты, структура, живой холст

![Главный конструктор](../screenshots/builder_website_main.webp)

### Редактор блоков и настройки темы

![Редактор блоков](../screenshots/builder_website.webp)

### Опубликованный HTML-вывод

![HTML-экспорт](../screenshots/builder_website_html.webp)

## Возможности

- **40+ виджетов** — hero, features, галерея, цены, FAQ, слайдер, мессенджеры, CTA, команда и другое
- **Шаблоны страниц** — бизнес, портфолио, ресторан, мероприятия
- **Адаптивный предпросмотр** — холст desktop, tablet, mobile
- **Экспорт HTML** — скачивание готового `index.html` для любого хостинга
- **Темы** — 12 акцентных цветов, наборы иконок, стили nav/footer
- **Живое демо** — изменения сохраняются в браузере (`localStorage`); без сохранения на сервере
- **Многоязычный интерфейс** — английский, украинский, норвежский (строки конструктора из панели Hosting)

## vs Business Landing CMS

| | **Landing Builder** (этот репозиторий) | **Business Landing CMS** (`lending`) |
|---|-------------------------------|--------------------------------------|
| Фокус | Визуальный блочный конструктор, быстрые одностраничники | Полноценная CMS: пресеты, админка, лиды, инвойсы |
| Сохранение | Экспорт HTML / черновик в браузере | База данных + админ-панель |
| Демо | https://bilohash.com/landing_builder/builder.php | https://bilohash.com/lending/ |

## Быстрый старт

### Живое демо (без установки)

Откройте `/builder.php` на демо-сайте. Используйте **Export HTML**, чтобы скачать страницу.

### Docker

```bash
docker run --rm -p 8080:80 ghcr.io/ruslan-bilohash/landing_builder:latest
# http://localhost:8080/builder.php
```

### Встроенный PHP-сервер

```bash
git clone https://github.com/Ruslan-Bilohash/landing_builder.git
cd landing_builder
php -S localhost:8080
```

### Интеграция с Hosting hPanel

Тот же движок поставляется в **BILOHASH Hosting** в `panel/landing-builder.php` с Save/Publish в `public_html/{user}/index.html`.

## 30-дневная демо-лицензия

Скачайте подписанный ZIP из GitHub Releases или из [кабинета клиента BILOHASH](https://bilohash.com/ecosystem/cabinet.php?product=landing_builder).  
Период оценки: **30 дней**. Продакшн: info@bilohash.com

## Экосистема

Часть [экосистемы BILOHASH CMS](https://bilohash.com/ecosystem/join.php) — Shop, Booking, Hosting, Faktura, Tavle, Freelance и другое.

## Лицензия

**Только некоммерческое использование** — можно просматривать, изучать, форкать и запускать демо для личного обучения и оценки.

**Коммерческое использование требует платной лицензии BILOHASH** (сайты клиентов, SaaS, перепродажа, продакшн сверх 30-дневного демо).

- [LICENSE](../../LICENSE) (на английском)
- [LICENSE-uk.md](../../LICENSE-uk.md) · [LICENSE-ru.md](../../LICENSE-ru.md) · [LICENSE-no.md](../../LICENSE-no.md) · [LICENSE-de.md](../../LICENSE-de.md) · [LICENSE-pl.md](../../LICENSE-pl.md) · [LICENSE-sv.md](../../LICENSE-sv.md) · [LICENSE-lt.md](../../LICENSE-lt.md)

Контакт: [rbilohash@gmail.com](mailto:rbilohash@gmail.com) · [ecosystem/join.php](https://bilohash.com/ecosystem/join.php)