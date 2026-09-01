# CURLOPT_READFUNCTION Callback Validates Its Return Value

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curlReadFunctionValueError.html","headline":"CURLOPT_READFUNCTION Callback Validates Its Return Value","name":"CURLOPT_READFUNCTION Callback Validates Its Return Value","description":"A `CURLOPT_READFUNCTION` callback is expected to return the chunk of data to upload, the empty string, `CURL_READFUNC_ABORT`, or `CURL_READFUNC_PAUSE`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curlReadFunctionValueError.html","inLanguage":"en","dateModified":"2026-09-01T07:51:40+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"CURLOPT_READFUNCTION Callback Validates Its Return Value"}]}}</script>

A `CURLOPT_READFUNCTION` callback is expected to return the chunk of data to upload, the empty string, `CURL_READFUNC_ABORT`, or `CURL_READFUNC_PAUSE`. Until PHP 8.6, an invalid return value, such as an arbitrary integer, was passed straight to libcurl, which simply aborted the transfer without any diagnostic from PHP. In PHP 8.6, `curl_exec()` throws a `ValueError` when the callback returns something other than a string, `CURL_READFUNC_ABORT`, or `CURL_READFUNC_PAUSE`.

## PHP code

```php
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
```

## Before

```text
bool(false)
```

## After

```text
The CURLOPT_READFUNCTION callback must return a string or CURL_READFUNC_ABORT or CURL_READFUNC_PAUSE
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [curl_setopt()](https://www.php.net/curl_setopt)
- [CURLOPT_READFUNCTION](https://www.php.net/manual/en/function.curl-setopt.php)

## Error Messages

- [The CURLOPT_READFUNCTION callback must return a string or CURL_READFUNC_ABORT or CURL_READFUNC_PAUSE](https://php-errors.readthedocs.io/en/latest/messages/the-curlopt_readfunction-callback-must-return-a-string-or-curl_readfunc_abort-or-curl_readfunc_pause.html)
