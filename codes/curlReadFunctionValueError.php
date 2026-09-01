<?php

$docroot = sys_get_temp_dir() . '/curlrf' . getmypid();
mkdir($docroot);
file_put_contents($docroot . '/upload.php', '<?php echo "ok";');

$port = 8391;
$server = proc_open(
    PHP_BINARY . ' -S 127.0.0.1:' . $port . ' -t ' . escapeshellarg($docroot),
    [1 => ['pipe', 'w'], 2 => ['pipe', 'w']],
    $pipes
);
usleep(500000);

$ch = curl_init('http://127.0.0.1:' . $port . '/upload.php');
curl_setopt($ch, CURLOPT_UPLOAD, true);
curl_setopt($ch, CURLOPT_INFILESIZE, 5);
curl_setopt($ch, CURLOPT_READFUNCTION, function ($ch, $fh, $length) {
    return 999;
});
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

try {
    $result = curl_exec($ch);
    var_dump($result);
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

proc_terminate($server);
proc_close($server);
unlink($docroot . '/upload.php');
rmdir($docroot);

?>