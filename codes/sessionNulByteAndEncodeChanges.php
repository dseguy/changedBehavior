<?php

$moduleName = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg('var_dump(session_module_name("foo" . chr(0) . "bar"));'));
echo $moduleName;

$dir = sys_get_temp_dir() . '/sessionNulByteAndEncodeChanges_' . getmypid();
mkdir($dir);
$code = 'session_save_path(' . var_export($dir, true) . '); session_start(); var_dump(session_encode()); session_destroy();';
$encoded = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg($code));
echo $encoded;
array_map('unlink', glob($dir . '/*'));
rmdir($dir);

?>
