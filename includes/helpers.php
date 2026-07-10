<?php
declare(strict_types=1);

function lb_h(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function lb_url(string $path = '', array $query = []): string
{
    global $site_url;
    $url = rtrim((string) $site_url, '/') . '/' . ltrim($path, '/');
    if ($query !== []) {
        $url .= (str_contains($url, '?') ? '&' : '?') . http_build_query($query);
    }

    return $url;
}

function lb_asset(string $rel): string
{
    global $site_url;
    $v = defined('LB_VERSION') ? LB_VERSION : '1';

    return rtrim((string) $site_url, '/') . '/assets/' . ltrim($rel, '/') . '?v=' . rawurlencode($v);
}

function lb_demo_user(): array
{
    return [
        'id' => 'demo',
        'username' => 'demo',
        'name' => 'Demo Business',
        'pending_domain' => 'example.com',
    ];
}

function lb_lang_url(string $code): string
{
    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');

    return lb_url($script, $code !== 'en' ? ['lang' => $code] : []);
}