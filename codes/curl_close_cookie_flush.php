<?php

$jar = tempnam(sys_get_temp_dir(), 'cookiejar');

$ch = curl_init('https://httpbin.org/cookies/set?test=value');
curl_setopt($ch, CURLOPT_COOKIEFILE, '');
curl_setopt($ch, CURLOPT_COOKIEJAR, $jar);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

var_dump(filesize($jar) > 0);

unlink($jar);

?>
