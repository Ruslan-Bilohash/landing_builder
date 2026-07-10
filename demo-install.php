<?php
declare(strict_types=1);

require_once __DIR__ . '/init.php';

$di = $t['demo_install'] ?? [];
$page_title = $di['page_title'] ?? 'Download Landing Builder — 30-day demo';
$page_desc = $di['meta_description'] ?? '';
$trialDays = defined('LB_DEMO_TRIAL_DAYS') ? (int) LB_DEMO_TRIAL_DAYS : 30;

$cabinetLang = $lang === 'uk' ? 'ua' : $lang;
$cabinetUrl = 'https://bilohash.com/ecosystem/cabinet.php?product=landing_builder'
    . ($cabinetLang !== 'en' ? '&lang=' . urlencode($cabinetLang === 'ua' ? 'uk' : $cabinetLang) : '');

$ghRelease = 'https://github.com/Ruslan-Bilohash/landing_builder/releases/latest';
$ghDocker = 'ghcr.io/ruslan-bilohash/landing_builder:latest';

require __DIR__ . '/includes/header.php';
?>

<section class="lb-hero">
  <div class="lb-container">
    <p class="lb-badge"><i class="fa-solid fa-box-open"></i> <?= lb_h('30-day demo') ?></p>
    <h1><?= lb_h($di['h1'] ?? '') ?></h1>
    <p class="lb-lead"><?= lb_h($di['subtitle'] ?? '') ?></p>
    <div class="lb-cta-row">
      <a href="<?= lb_h(lb_url('builder.php', $lang !== 'en' ? ['lang' => $lang] : [])) ?>" class="lb-btn lb-btn-ghost">
        <i class="fa-solid fa-eye"></i> <?= lb_h($di['try_live'] ?? 'Try live builder') ?>
      </a>
    </div>
  </div>
</section>

<section class="lb-section">
  <div class="lb-container">
    <div class="lb-di-card">
      <h2><i class="fa-solid fa-list-ol" style="color:var(--lb-accent)"></i> <?= lb_h($di['steps_title'] ?? '') ?></h2>
      <ol class="lb-muted" style="line-height:1.7;padding-left:1.2rem">
        <?php foreach ($di['steps'] ?? [] as $step): ?>
        <li><?= lb_h($step) ?></li>
        <?php endforeach; ?>
      </ol>
      <p class="lb-muted"><?= lb_h(strtr($di['trial_note'] ?? '', ['{days}' => (string) $trialDays])) ?></p>
    </div>

    <div class="lb-di-card">
      <h2><i class="fa-solid fa-download" style="color:var(--lb-accent)"></i> <?= lb_h($di['form_title'] ?? '') ?></h2>
      <p class="lb-muted"><?= lb_h($di['download_help'] ?? '') ?></p>
      <p style="margin:1rem 0">
        <a class="lb-btn lb-btn-primary" href="<?= lb_h($ghRelease) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-github"></i> GitHub Release (demo ZIP)</a>
        <a class="lb-btn lb-btn-ghost" href="<?= lb_h($cabinetUrl) ?>"><i class="fa-solid fa-door-open"></i> <?= lb_h($di['cabinet_cta'] ?? '') ?></a>
      </p>
      <p class="lb-muted"><code><?= lb_h($ghDocker) ?></code></p>
      <p class="lb-muted"><?= lb_h($di['package_missing'] ?? '') ?></p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php';