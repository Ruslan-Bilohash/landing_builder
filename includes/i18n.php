<?php
declare(strict_types=1);

/** @return array<string, array{label:string,html:string,name:string,flag:string}> */
function lb_langs(): array
{
    return [
        'en' => ['label' => 'EN', 'html' => 'en', 'name' => 'English', 'flag' => '🇬🇧'],
        'uk' => ['label' => 'UA', 'html' => 'uk', 'name' => 'Українська', 'flag' => '🇺🇦'],
        'no' => ['label' => 'NO', 'html' => 'no', 'name' => 'Norsk', 'flag' => '🇳🇴'],
        'ru' => ['label' => 'RU', 'html' => 'ru', 'name' => 'Русский', 'flag' => '🇷🇺'],
        'de' => ['label' => 'DE', 'html' => 'de', 'name' => 'Deutsch', 'flag' => '🇩🇪'],
        'pl' => ['label' => 'PL', 'html' => 'pl', 'name' => 'Polski', 'flag' => '🇵🇱'],
        'sv' => ['label' => 'SV', 'html' => 'sv', 'name' => 'Svenska', 'flag' => '🇸🇪'],
        'lt' => ['label' => 'LT', 'html' => 'lt', 'name' => 'Lietuvių', 'flag' => '🇱🇹'],
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

function lb_ecosystem_join_lang(string $lang): string
{
    return match ($lang) {
        'uk' => 'ua',
        default => $lang,
    };
}

function lb_join_url(string $lang): string
{
    $jlang = lb_ecosystem_join_lang($lang);
    $base = 'https://bilohash.com/ecosystem/join.php';
    $params = ['cms' => 'landing_builder'];
    if ($jlang !== 'en') {
        $params['lang'] = $jlang;
    }

    return $base . '?' . http_build_query($params);
}

/** @return array<string, mixed> */
function lb_lang_extra(string $lang): array
{
    $extras = [
        'en' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Language',
            'demo_banner' => 'Live demo — changes stay in your browser only (no server save).',
            'nav_home' => 'Product page',
            'nav_builder' => 'Open builder',
            'nav_demo_install' => '30-day install',
            'nav_ecosystem' => 'Ecosystem',
            'want_builder' => 'I want this builder',
            'want_builder_title' => 'Register in BILOHASH ecosystem',
            'export_html' => 'Export HTML',
            'export_html_title' => 'Download page as index.html',
            'landing_tip_export' => 'Export HTML downloads a ready index.html — host it anywhere.',
            'landing_tip_no_save' => 'This demo does not save to the server. Use Export HTML or browser storage.',
        ],
        'uk' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Мова',
            'demo_banner' => 'Live demo — зміни лише у вашому браузері (без збереження на сервері).',
            'nav_home' => 'Сторінка продукту',
            'nav_builder' => 'Відкрити конструктор',
            'nav_demo_install' => 'Демо 30 днів',
            'nav_ecosystem' => 'Екосистема',
            'want_builder' => 'Хочу такий конструктор',
            'want_builder_title' => 'Реєстрація в екосистемі BILOHASH',
            'export_html' => 'Експорт HTML',
            'export_html_title' => 'Завантажити сторінку як index.html',
            'landing_tip_export' => 'Експорт HTML завантажує готовий index.html — розмістіть на будь-якому хостингу.',
            'landing_tip_no_save' => 'Це демо не зберігає на сервер. Використовуйте експорт HTML або сховище браузера.',
        ],
        'no' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Språk',
            'demo_banner' => 'Live demo — endringer lagres bare i nettleseren (ingen lagring på server).',
            'nav_home' => 'Produktside',
            'nav_builder' => 'Åpne bygger',
            'nav_demo_install' => '30-dagers demo',
            'nav_ecosystem' => 'Økosystem',
            'want_builder' => 'Jeg vil ha denne byggeren',
            'want_builder_title' => 'Registrer deg i BILOHASH-økosystemet',
            'export_html' => 'Eksporter HTML',
            'export_html_title' => 'Last ned siden som index.html',
            'landing_tip_export' => 'Eksporter HTML laster ned en ferdig index.html — host den hvor som helst.',
            'landing_tip_no_save' => 'Denne demoen lagrer ikke på server. Bruk HTML-eksport eller nettleserlagring.',
        ],
        'ru' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Язык',
            'demo_banner' => 'Live demo — изменения только в браузере (без сохранения на сервере).',
            'nav_home' => 'Страница продукта',
            'nav_builder' => 'Открыть конструктор',
            'nav_demo_install' => 'Демо 30 дней',
            'nav_ecosystem' => 'Экосистема',
            'want_builder' => 'Хочу такой конструктор',
            'want_builder_title' => 'Регистрация в экосистеме BILOHASH',
            'export_html' => 'Экспорт HTML',
            'export_html_title' => 'Скачать страницу как index.html',
            'landing_tip_export' => 'Экспорт HTML загружает готовый index.html — разместите на любом хостинге.',
            'landing_tip_no_save' => 'Демо не сохраняет на сервер. Используйте экспорт HTML или хранилище браузера.',
        ],
        'de' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Sprache',
            'demo_banner' => 'Live-Demo — Änderungen nur im Browser (keine Server-Speicherung).',
            'nav_home' => 'Produktseite',
            'nav_builder' => 'Builder öffnen',
            'nav_demo_install' => '30-Tage-Demo',
            'nav_ecosystem' => 'Ökosystem',
            'want_builder' => 'Ich möchte diesen Builder',
            'want_builder_title' => 'Im BILOHASH-Ökosystem registrieren',
            'export_html' => 'HTML exportieren',
            'export_html_title' => 'Seite als index.html herunterladen',
            'landing_tip_export' => 'HTML-Export lädt eine fertige index.html — hosten Sie sie überall.',
            'landing_tip_no_save' => 'Diese Demo speichert nicht auf dem Server. Nutzen Sie HTML-Export oder Browser-Speicher.',
        ],
        'pl' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Język',
            'demo_banner' => 'Live demo — zmiany tylko w przeglądarce (bez zapisu na serwerze).',
            'nav_home' => 'Strona produktu',
            'nav_builder' => 'Otwórz kreator',
            'nav_demo_install' => 'Demo 30 dni',
            'nav_ecosystem' => 'Ekosystem',
            'want_builder' => 'Chcę taki kreator',
            'want_builder_title' => 'Rejestracja w ekosystemie BILOHASH',
            'export_html' => 'Eksport HTML',
            'export_html_title' => 'Pobierz stronę jako index.html',
            'landing_tip_export' => 'Eksport HTML pobiera gotowy index.html — hostuj gdziekolwiek.',
            'landing_tip_no_save' => 'To demo nie zapisuje na serwerze. Użyj eksportu HTML lub pamięci przeglądarki.',
        ],
        'sv' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Språk',
            'demo_banner' => 'Live demo — ändringar sparas bara i webbläsaren (ingen serverlagring).',
            'nav_home' => 'Produktsida',
            'nav_builder' => 'Öppna byggare',
            'nav_demo_install' => '30-dagars demo',
            'nav_ecosystem' => 'Ekosystem',
            'want_builder' => 'Jag vill ha denna byggare',
            'want_builder_title' => 'Registrera dig i BILOHASH-ekosystemet',
            'export_html' => 'Exportera HTML',
            'export_html_title' => 'Ladda ner sidan som index.html',
            'landing_tip_export' => 'HTML-export laddar ner en färdig index.html — hosta var som helst.',
            'landing_tip_no_save' => 'Denna demo sparar inte på servern. Använd HTML-export eller webbläsarlagring.',
        ],
        'lt' => [
            'brand' => 'BILOHASH Landing Builder',
            'a11y_language' => 'Kalba',
            'demo_banner' => 'Live demo — pakeitimai tik naršyklėje (be išsaugojimo serveryje).',
            'nav_home' => 'Produkto puslapis',
            'nav_builder' => 'Atidaryti konstruktorių',
            'nav_demo_install' => '30 dienų demo',
            'nav_ecosystem' => 'Ekosistema',
            'want_builder' => 'Noriu tokio konstruktoriaus',
            'want_builder_title' => 'Registracija BILOHASH ekosistemoje',
            'export_html' => 'Eksportuoti HTML',
            'export_html_title' => 'Atsisiųsti puslapį kaip index.html',
            'landing_tip_export' => 'HTML eksportas atsisiunčia paruoštą index.html — talpinkite bet kur.',
            'landing_tip_no_save' => 'Ši demo neišsaugo serveryje. Naudokite HTML eksportą arba naršyklės saugyklą.',
        ],
    ];

    return $extras[$lang] ?? $extras['en'];
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