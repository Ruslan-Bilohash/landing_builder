<?php
declare(strict_types=1);
?>
</main>
<footer class="lb-footer">
  <p>BILOHASH Landing Builder v<?= lb_h(defined('LB_VERSION') ? LB_VERSION : '1.0.0') ?> ·
    <a href="https://github.com/Ruslan-Bilohash/landing_builder">GitHub</a> ·
    <a href="https://bilohash.com/">bilohash.com</a>
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