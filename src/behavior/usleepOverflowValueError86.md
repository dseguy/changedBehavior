# usleep() Validates Its Microseconds Argument Range

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/usleepOverflowValueError86.html","headline":"usleep() Validates Its Microseconds Argument Range","name":"usleep() Validates Its Microseconds Argument Range","description":"`usleep()`'s `$microseconds` argument is passed to the operating system as an unsigned integer.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/usleepOverflowValueError86.html","inLanguage":"en","dateModified":"2026-08-13T05:05:20+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"usleep() Validates Its Microseconds Argument Range"}]}}</script>

`usleep()`'s `$microseconds` argument is passed to the operating system as an unsigned integer. Until PHP 8.6, a value greater than `UINT_MAX` (4294967295) silently overflowed, which could make the function sleep for a much shorter time than requested. In PHP 8.6, a value greater than `UINT_MAX` throws a `ValueError` instead.

## PHP code

```php
<?php

try {
    var_dump(usleep(4294967296));
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
NULL
```

## After

```text
ValueError: usleep(): Argument #1 ($microseconds) must be between 0 and 4294967295
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [usleep()](https://www.php.net/usleep)

## Error Messages

- [ValueError: usleep(): Argument #1 ($microseconds) must be between 0 and 4294967295](https://php-errors.readthedocs.io/en/latest/messages/must-be-between-0-and-4294967295.html)
