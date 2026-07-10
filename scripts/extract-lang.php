<?php
declare(strict_types=1);

$maps = ['en' => 'panel-en.php', 'uk' => 'panel-uk.php', 'no' => 'panel-no.php'];
$outDir = dirname(__DIR__) . '/lang';
$hostingLang = dirname(__DIR__, 2) . '/hosting/lang';

foreach ($maps as $lang => $file) {
    $arr = include $hostingLang . '/' . $file;
    $filtered = [];
    foreach ($arr as $k => $v) {
        if (str_starts_with((string) $k, 'landing_')) {
            $filtered[$k] = $v;
        }
    }
    $php = "<?php\nreturn " . var_export($filtered, true) . ";\n";
    file_put_contents($outDir . '/' . $lang . '.php', $php);
    echo $lang . ': ' . count($filtered) . " keys\n";
}