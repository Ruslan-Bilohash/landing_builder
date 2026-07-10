<?php
declare(strict_types=1);

if (!defined('LB_DEMO_MODE')) {
    define('LB_DEMO_MODE', true);
}

if (!defined('HS_PUBLIC_HTML')) {
    define('HS_PUBLIC_HTML', 'public_html');
}

if (!function_exists('hs_fm_norm_rel')) {
    function hs_fm_norm_rel(string $path): string
    {
        $path = str_replace('\\', '/', trim($path));
        $path = ltrim($path, '/');
        if (str_contains($path, '..')) {
            return '';
        }

        return $path;
    }
}

if (!function_exists('hs_fm_user_root')) {
    /** @param array<string, mixed> $user */
    function hs_fm_user_root(array $user): string
    {
        return sys_get_temp_dir() . '/lb_demo_' . md5((string) ($user['id'] ?? 'guest'));
    }
}

if (!function_exists('hs_fm_resolve')) {
    /** @param array<string, mixed> $user */
    function hs_fm_resolve(array $user, string $rel): string
    {
        $root = hs_fm_user_root($user);
        $rel = hs_fm_norm_rel($rel);
        if ($rel === '') {
            return $root;
        }

        return $root . '/' . $rel;
    }
}

if (!function_exists('hs_fm_is_image')) {
    function hs_fm_is_image(string $name): bool
    {
        return (bool) preg_match('/\.(jpe?g|png|gif|webp|avif)$/i', $name);
    }
}

if (!function_exists('hs_install_default_base')) {
    /** @param array<string, mixed> $user */
    function hs_install_default_base(array $user): string
    {
        return 'demo/' . preg_replace('/[^a-z0-9_-]/i', '', (string) ($user['username'] ?? 'guest'));
    }
}

if (!function_exists('hs_public_path')) {
    function hs_public_path(string $rel): string
    {
        return hs_fm_resolve(['id' => 'demo'], $rel);
    }
}

if (!function_exists('hs_csrf_token')) {
    function hs_csrf_token(): string
    {
        return '';
    }
}

if (!function_exists('hs_csrf_field')) {
    function hs_csrf_field(): string
    {
        return '';
    }
}

if (!function_exists('hs_csrf_verify')) {
    function hs_csrf_verify(?string $token): bool
    {
        return true;
    }
}

if (!function_exists('hs_panel_path')) {
    function hs_panel_path(string $file): string
    {
        return $file;
    }
}