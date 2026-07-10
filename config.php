<?php
declare(strict_types=1);

define('LB_VERSION', '1.0.0');
define('LB_DEMO_TRIAL_DAYS', 30);
define('LB_PRODUCT_SLUG', 'landing_builder');

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/\\');
if ($base === '/' || $base === '\\') {
    $base = '';
}
$site_url = $protocol . '://' . $host . $base;