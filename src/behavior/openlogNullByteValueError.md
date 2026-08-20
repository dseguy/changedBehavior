# openlog() Rejects NUL Bytes In The Prefix

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/openlogNullByteValueError.html","headline":"openlog() Rejects NUL Bytes In The Prefix","name":"openlog() Rejects NUL Bytes In The Prefix","description":"`openlog()` used to accept a syslog prefix containing a NUL byte and silently truncated it at the NUL byte.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/openlogNullByteValueError.html","inLanguage":"en","dateModified":"2026-07-26T06:32:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"openlog() Rejects NUL Bytes In The Prefix"}]}}</script>

`openlog()` used to accept a syslog prefix containing a NUL byte and silently truncated it at the NUL byte. In PHP 8.6, a NUL byte in the argument throws a `ValueError`.

## PHP code

```php
<?php

try {
    var_dump(openlog("foo\0bar", LOG_PID, LOG_USER));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
bool(true)
```

## After

```text
openlog(): Argument #1 ($prefix) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [openlog()](https://www.php.net/openlog)

## Error Messages

- [openlog(): Argument #1 ($prefix) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/openlog%28%29%3A-argument-%231-%28%24prefix%29-must-not-contain-any-null-bytes.html)
