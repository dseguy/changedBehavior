<?php

$out = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg('var_dump(ini_get("session.use_strict_mode"), ini_get("session.cookie_httponly"), ini_get("session.cookie_samesite"));'));
echo $out;

?>
