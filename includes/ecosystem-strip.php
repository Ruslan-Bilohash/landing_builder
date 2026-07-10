<?php
declare(strict_types=1);

function lb_render_ecosystem_strip(): void
{
    global $t, $lang;
    $defs = dirname(__DIR__, 2) . '/includes/ecosystem-defs.php';
    $i18n = dirname(__DIR__, 2) . '/includes/ecosystem-i18n.php';
    if (!is_file($defs) || !is_file($i18n)) {
        return;
    }
    require_once $defs;
    require_once $i18n;
    if (!function_exists('bh_ecosystem_merge_labels') || !function_exists('bh_ecosystem_product_labels')) {
        return;
    }
    $labels = bh_ecosystem_product_labels($lang);
    $items = bh_ecosystem_merge_labels($labels, 'landing_builder');
    $eco = $t['ecosystem'] ?? [];
    ?>
<section class="lb-eco">
  <div class="lb-container">
    <p class="lb-eco-badge"><i class="fa-solid fa-layer-group"></i> <?= lb_h($eco['strip_label'] ?? 'BILOHASH') ?></p>
    <h2><?= lb_h($eco['title'] ?? '') ?></h2>
    <p class="lb-muted"><?= lb_h($eco['subtitle'] ?? '') ?></p>
    <div class="lb-eco-grid">
      <?php foreach (array_slice($items, 0, 8) as $item): ?>
      <a class="lb-eco-card" href="<?= lb_h((string) ($item['demo'] ?? $item['url'] ?? '#')) ?>" target="_blank" rel="noopener">
        <i class="fa-solid fa-<?= lb_h((string) ($item['icon'] ?? 'cube')) ?>"></i>
        <strong><?= lb_h((string) ($item['name'] ?? '')) ?></strong>
        <span><?= lb_h((string) ($item['desc'] ?? '')) ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php
}