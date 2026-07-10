<?php
declare(strict_types=1);

/** @var string $page_title */
/** @var string $page_desc */
/** @var array $t */
/** @var string $lang */
$page_desc = $page_desc ?? '';
$canonical = $canonical ?? lb_url(basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'), $lang !== 'en' ? ['lang' => $lang] : []);
$lang_meta = lb_langs()[$lang] ?? lb_langs()['en'];
?>
<!DOCTYPE html>
<html lang="<?= lb_h($lang_meta['html']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= lb_h($page_title) ?> — <?= lb_h($t['brand'] ?? 'Landing Builder') ?></title>
<?php if ($page_desc !== ''): ?><meta name="description" content="<?= lb_h($page_desc) ?>"><?php endif; ?>
<link rel="canonical" href="<?= lb_h($canonical) ?>">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="<?= lb_h(lb_asset('css/site.css')) ?>">
</head>
<body>
<header class="lb-header">
  <a href="<?= lb_h(lb_url('index.php', $lang !== 'en' ? ['lang' => $lang] : [])) ?>" class="lb-logo">
    <span class="lb-logo-mark"><i class="fa-solid fa-layer-group"></i></span>
    <?= lb_h($t['brand'] ?? 'Landing Builder') ?>
  </a>
  <nav class="lb-nav">
    <a href="<?= lb_h(lb_url('builder.php', $lang !== 'en' ? ['lang' => $lang] : [])) ?>" class="lb-nav-cta"><i class="fa-solid fa-wand-magic-sparkles"></i> <?= lb_h($t['nav_builder'] ?? 'Builder') ?></a>
    <a href="<?= lb_h(lb_url('demo-install.php', $lang !== 'en' ? ['lang' => $lang] : [])) ?>"><?= lb_h($t['nav_demo_install'] ?? '30-day demo') ?></a>
    <a href="<?= lb_h(lb_join_url($lang)) ?>" class="lb-nav-want"><i class="fa-solid fa-handshake"></i> <?= lb_h($t['want_builder'] ?? 'I want this builder') ?></a>
    <?php $lb_lang_dropdown_variant = 'site'; require __DIR__ . '/lang-dropdown.php'; ?>
  </nav>
</header>
<main class="lb-main">