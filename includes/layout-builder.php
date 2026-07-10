<?php
declare(strict_types=1);

/** @var string $page_title */
/** @var array $t */
/** @var string $lang */
$lang_meta = lb_langs()[$lang] ?? lb_langs()['en'];
?>
<!DOCTYPE html>
<html lang="<?= lb_h($lang_meta['html']) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<title><?= lb_h($page_title) ?> — <?= lb_h($t['brand'] ?? 'Landing Builder') ?></title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="<?= lb_h(lb_asset('css/builder-base.css')) ?>">
<link rel="stylesheet" href="<?= lb_h(lb_asset('css/landing-elementor.css')) ?>">
</head>
<body class="hs-panel hp-panel hs-landing-focus-page">
<div class="hs-demo-banner"><i class="fa-solid fa-flask"></i> <?= lb_h($t['demo_banner'] ?? '') ?></div>
<div class="hs-main hp-main hs-landing-focus-main">
  <main class="hs-content hp-content hp-content-elb">
    <?= $content ?? '' ?>
  </main>
</div>
<script src="<?= lb_h(lb_asset('js/landing-builder.js')) ?>" defer></script>
</body>
</html>