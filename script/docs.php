<?php

$docs = glob('docs/*.ini');
$docs = array_map(function ($s) { return basename($s, '.ini');}, $docs);

$codes = glob('codes/*.php');
$codes = array_map(function ($s) { return basename($s, '.php');}, $codes);

$diff = array_diff($codes, $docs);

print_r($diff);

print count($diff)." docs are missing\n";
print count($docs)." docs are done\n";

?>