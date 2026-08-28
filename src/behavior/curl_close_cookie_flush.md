# curl_close() No Longer Flushes The Cookie Jar

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curl_close_cookie_flush.html","headline":"curl_close() No Longer Flushes The Cookie Jar","name":"curl_close() No Longer Flushes The Cookie Jar","description":"Prior to PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curl_close_cookie_flush.html","inLanguage":"en","dateModified":"2026-08-28T12:00:43+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"curl_close() No Longer Flushes The Cookie Jar"}]}}</script>

Prior to PHP 8.0, calling `curl_close()` on a handle that used a cookie jar would immediately write the collected cookies to disk, since the underlying resource was destroyed right away. Since PHP 8.0, cURL handles are objects, and `curl_close()` no longer destroys the handle: it only becomes a no-op that keeps the handle usable, so the cookie jar file is not written anymore until the object is actually garbage collected. Code relying on `curl_close()` to flush cookies to disk should instead call `curl_setopt($handle, CURLOPT_COOKIELIST, "FLUSH")` before closing the handle. Since PHP 8.5, calling `curl_close()` at all raises a deprecation notice, as core has confirmed the function has had no effect since 8.0.

## PHP code

```php
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
```

## Before

```text
bool(true)
```

## After

```text
bool(false)
```

## PHP version change

This behavior was deprecated in 8.5.

This behavior changed in 8.0.

## See Also

- [curl_close](https://www.php.net/manual/en/function.curl-close.php)
- [CURLOPT_COOKIELIST](https://www.php.net/manual/en/function.curl-setopt.php)
- [doc-en#5791: How to flush cookies as of PHP8](https://github.com/php/doc-en/pull/5791)

## Error Messages

- [Function curl_close() is deprecated since 8.5, as it has no effect since PHP 8.0](https://php-errors.readthedocs.io/en/latest/messages/function-curl_close%28%29-is-deprecated-since-8.5%2C-as-it-has-no-effect-since-php-8.0.html)
