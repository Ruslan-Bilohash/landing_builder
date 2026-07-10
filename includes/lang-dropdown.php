<?php
declare(strict_types=1);

/** @var string $lang */
/** @var array $t */
$current = lb_langs()[$lang] ?? lb_langs()['en'];
$variant = $lb_lang_dropdown_variant ?? 'site';
?>
<details class="lb-lang-details lb-lang-details--<?= lb_h($variant) ?>" id="lbLangDetails">
  <summary class="lb-lang-btn" aria-label="<?= lb_h($t['a11y_language'] ?? 'Language') ?>">
    <span class="lb-lang-flag" aria-hidden="true"><?= $current['flag'] ?? '🌐' ?></span>
    <span class="lb-lang-label"><?= lb_h($current['label'] ?? 'EN') ?></span>
    <i class="fa-solid fa-chevron-down lb-lang-chevron" aria-hidden="true"></i>
  </summary>
  <ul class="lb-lang-menu" role="listbox">
    <?php foreach (lb_langs() as $code => $info): ?>
    <li role="option">
      <a href="<?= lb_h(lb_lang_url($code)) ?>" class="lb-lang-option<?= $code === $lang ? ' is-active' : '' ?>" <?= $code === $lang ? 'aria-current="true"' : '' ?>>
        <span class="lb-lang-flag" aria-hidden="true"><?= $info['flag'] ?? '🌐' ?></span>
        <span><?= lb_h($info['name'] ?? $info['label']) ?></span>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
</details>