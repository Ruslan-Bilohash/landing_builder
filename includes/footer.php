<?php
declare(strict_types=1);
?>
</main>
<footer class="lb-footer">
  <p>BILOHASH Landing Builder v<?= lb_h(defined('LB_VERSION') ? LB_VERSION : '1.0.0') ?> ·
    <a href="https://github.com/Ruslan-Bilohash/landing_builder">GitHub</a> ·
    <a href="https://bilohash.com/">bilohash.com</a>
  </p>
  <p class="lb-license-note">
    <?= lb_h($t['license_footer'] ?? 'Non-commercial use only. Commercial use requires a') ?>
    <a href="<?= lb_h(lb_join_url($lang)) ?>"><?= lb_h($t['license_link'] ?? 'BILOHASH license') ?></a>.
    <a href="https://github.com/Ruslan-Bilohash/landing_builder/blob/main/LICENSE">LICENSE</a>
  </p>
</footer>
<?php
$ecoStrip = __DIR__ . '/ecosystem-strip.php';
if (is_file($ecoStrip)) {
    require_once $ecoStrip;
    lb_render_ecosystem_strip();
}
?>
</body>
</html>