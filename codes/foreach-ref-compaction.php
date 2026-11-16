<?php
// 1. By-reference foreach after array compaction.
// Manual: loops "may now visit previously skipped elements after array compaction".
// Compare the list of visited keys between PHP 8.5 and 8.6.
$a = [0, 1, 2];

foreach ($a as &$outer) {
    foreach ($a as &$value) {
        echo $value, "\n";

        if ($value === 1) {
            unset($a[0], $a[1]);
            $a['x'] = 3;
        }
    }
    break;
}
unset($outer, $value);