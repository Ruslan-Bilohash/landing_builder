<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/i18n.php';

$lang = lb_resolve_lang();
if (isset($_GET['lang']) && array_key_exists((string) $_GET['lang'], lb_langs())) {
    setcookie('lb_lang', $lang, ['expires' => time() + 86400 * 365, 'path' => '/', 'samesite' => 'Lax']);
}

$t = lb_load_translations($lang);

if (!function_exists('hs_h')) {
    function hs_h(?string $s): string
    {
        return lb_h($s);
    }
}

if (!function_exists('hs_url')) {
    function hs_url(string $path): string
    {
        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        return lb_url(ltrim($path, '/'));
    }
}

if (!function_exists('hs_asset')) {
    function hs_asset(string $rel): string
    {
        return lb_asset($rel);
    }
}

$user = lb_demo_user();