<?php
declare(strict_types=1);

/** @return array<string, array{label:string,html:string}> */
function lb_langs(): array
{
    return [
        'en' => ['label' => 'English', 'html' => 'en'],
        'uk' => ['label' => 'Українська', 'html' => 'uk'],
        'no' => ['label' => 'Norsk', 'html' => 'no'],
        'ru' => ['label' => 'Русский', 'html' => 'ru'],
        'sv' => ['label' => 'Svenska', 'html' => 'sv'],
        'lt' => ['label' => 'Lietuvių', 'html' => 'lt'],
    ];
}

function lb_resolve_lang(): string
{
    $allowed = array_keys(lb_langs());
    $q = (string) ($_GET['lang'] ?? '');
    if (in_array($q, $allowed, true)) {
        return $q;
    }
    $cookie = (string) ($_COOKIE['lb_lang'] ?? '');
    if (in_array($cookie, $allowed, true)) {
        return $cookie;
    }

    return 'en';
}

/** @return array<string, mixed> */
function lb_lang_extra(string $lang): array
{
    $extras = [
        'en' => [
            'brand' => 'BILOHASH Landing Builder',
            'demo_banner' => 'Live demo — changes stay in your browser only (no server save).',
            'nav_home' => 'Product page',
            'nav_builder' => 'Open builder',
            'nav_demo_install' => '30-day install',
            'nav_ecosystem' => 'Ecosystem',
            'export_html' => 'Export HTML',
            'export_html_title' => 'Download page as index.html',
            'landing_tip_export' => 'Export HTML downloads a ready index.html — host it anywhere.',
            'landing_tip_no_save' => 'This demo does not save to the server. Use Export HTML or browser storage.',
        ],
        'uk' => [
            'brand' => 'BILOHASH Landing Builder',
            'demo_banner' => 'Live demo — зміни лише у вашому браузері (без збереження на сервері).',
            'nav_home' => 'Сторінка продукту',
            'nav_builder' => 'Відкрити конструктор',
            'nav_demo_install' => 'Демо 30 днів',
            'nav_ecosystem' => 'Екосистема',
            'export_html' => 'Експорт HTML',
            'export_html_title' => 'Завантажити сторінку як index.html',
            'landing_tip_export' => 'Експорт HTML завантажує готовий index.html — розмістіть на будь-якому хостингу.',
            'landing_tip_no_save' => 'Це демо не зберігає на сервер. Використовуйте експорт HTML або сховище браузера.',
        ],
        'no' => [
            'brand' => 'BILOHASH Landing Builder',
            'demo_banner' => 'Live demo — endringer lagres bare i nettleseren (ingen lagring på server).',
            'nav_home' => 'Produktside',
            'nav_builder' => 'Åpne bygger',
            'nav_demo_install' => '30-dagers demo',
            'nav_ecosystem' => 'Økosystem',
            'export_html' => 'Eksporter HTML',
            'export_html_title' => 'Last ned siden som index.html',
            'landing_tip_export' => 'Eksporter HTML laster ned en ferdig index.html — host den hvor som helst.',
            'landing_tip_no_save' => 'Denne demoen lagrer ikke på server. Bruk HTML-eksport eller nettleserlagring.',
        ],
    ];

    if (isset($extras[$lang])) {
        return $extras[$lang];
    }

    return $extras['en'];
}

/** @return array<string, mixed> */
function lb_load_translations(string $lang): array
{
    $file = __DIR__ . '/../lang/' . $lang . '.php';
    if (!is_file($file)) {
        $file = __DIR__ . '/../lang/en.php';
    }
    /** @var array<string, mixed> $base */
    $base = include $file;

    $homeFile = __DIR__ . '/../lang/home-' . $lang . '.php';
    if (!is_file($homeFile)) {
        $homeFile = __DIR__ . '/../lang/home-en.php';
    }
    /** @var array<string, mixed> $homePack */
    $homePack = include $homeFile;

    return array_merge($base, lb_lang_extra($lang), $homePack);
}