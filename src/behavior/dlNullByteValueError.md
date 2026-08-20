# dl() Rejects NUL Bytes In The Extension Filename

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dlNullByteValueError.html","headline":"dl() Rejects NUL Bytes In The Extension Filename","name":"dl() Rejects NUL Bytes In The Extension Filename","description":"`dl()` used to accept an extension filename containing a NUL byte and only reported the standard warning once `enable_dl` turned out to be off.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dlNullByteValueError.html","inLanguage":"en","dateModified":"2026-07-26T06:32:09+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"dl() Rejects NUL Bytes In The Extension Filename"}]}}</script>

`dl()` used to accept an extension filename containing a NUL byte and only reported the standard warning once `enable_dl` turned out to be off. In PHP 8.6, a NUL byte in the argument throws a `ValueError` before that check is even reached.

## PHP code

```php
<?php

try {
    var_dump(dl("foo\0bar"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
PHP Warning:  dl(): Dynamically loaded extensions aren't enabled in /codes/dlNullByteValueError.php on line 4

Warning: dl(): Dynamically loaded extensions aren't enabled in /codes/dlNullByteValueError.php on line 4
bool(false)
```

## After

```text
dl(): Argument #1 ($extension_filename) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [dl()](https://www.php.net/dl)

## Error Messages

- [dl(): Argument #1 ($extension_filename) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/dl%28%29%3A-argument-%231-%28%24extension_filename%29-must-not-contain-any-null-bytes.html)
