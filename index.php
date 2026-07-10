<?php
declare(strict_types=1);

require_once __DIR__ . '/init.php';

$h = $t['home'] ?? [];
$page_title = $h['title'] ?? 'BILOHASH Landing Builder';
$page_desc = $h['lead'] ?? '';

require __DIR__ . '/includes/header.php';
?>

<section class="lb-hero">
  <div class="lb-container">
    <p class="lb-badge"><i class="fa-solid fa-layer-group"></i> <?= lb_h($h['badge'] ?? '') ?></p>
    <h1><?= lb_h($h['title'] ?? '') ?></h1>
    <p class="lb-lead"><?= lb_h($h['lead'] ?? '') ?></p>
    <p class="lb-sub"><?= lb_h($h['sublead'] ?? '') ?></p>
    <div class="lb-cta-row">
      <a href="<?= lb_h(lb_url('builder.php', $lang !== 'en' ? ['lang' => $lang] : [])) ?>" class="lb-btn lb-btn-primary">
        <i class="fa-solid fa-wand-magic-sparkles"></i> <?= lb_h($h['builder_cta'] ?? 'Open builder') ?>
      </a>
      <a href="<?= lb_h(lb_url('demo-install.php', $lang !== 'en' ? ['lang' => $lang] : [])) ?>" class="lb-btn lb-btn-ghost">
        <i class="fa-solid fa-box-open"></i> <?= lb_h($h['demo_install_cta'] ?? '30-day install') ?>
      </a>
      <a href="<?= lb_h(lb_join_url($lang)) ?>" class="lb-btn lb-btn-ghost">
        <i class="fa-solid fa-handshake"></i> <?= lb_h($t['want_builder'] ?? 'I want this builder') ?>
      </a>
      <a href="https://bilohash.com/hosting/panel/landing-builder.php" class="lb-btn lb-btn-ghost" target="_blank" rel="noopener">
        <i class="fa-solid fa-server"></i> <?= lb_h($h['hosting_cta'] ?? 'Hosting hPanel') ?>
      </a>
    </div>
  </div>
</section>

<section class="lb-section">
  <div class="lb-container">
    <h2><?= lb_h($h['features_title'] ?? 'Features') ?></h2>
    <div class="lb-grid">
      <?php foreach ($h['features'] ?? [] as $feat): ?>
      <article class="lb-card">
        <i class="fa-solid <?= lb_h($feat['icon'] ?? 'fa-star') ?>"></i>
        <h3><?= lb_h($feat['title'] ?? '') ?></h3>
        <p><?= lb_h($feat['text'] ?? '') ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="lb-section">
  <div class="lb-container">
    <h2><?= lb_h($h['screenshots_title'] ?? 'Screenshots') ?></h2>
    <div class="lb-shots">
      <?php foreach ($h['screenshots'] ?? [] as $shot): ?>
      <figure class="lb-shot">
        <img src="<?= lb_h(lb_url($shot['file'] ?? '')) ?>" alt="<?= lb_h($shot['caption'] ?? '') ?>" loading="lazy" width="1200" height="675">
        <figcaption><?= lb_h($shot['caption'] ?? '') ?></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="lb-section">
  <div class="lb-container lb-compare">
    <h2><?= lb_h($h['compare_title'] ?? '') ?></h2>
    <p><strong>Landing Builder</strong> — <?= lb_h($h['compare_landing_builder'] ?? '') ?></p>
    <p><strong>Business Landing CMS</strong> — <?= lb_h($h['compare_lending'] ?? '') ?>
      <a href="<?= lb_h($h['compare_lending_link'] ?? 'https://bilohash.com/lending/') ?>" target="_blank" rel="noopener">bilohash.com/lending/</a>
    </p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php';