# putenv() Rejects NUL Bytes In The Assignment

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/putenvNullByteValueError.html","headline":"putenv() Rejects NUL Bytes In The Assignment","name":"putenv() Rejects NUL Bytes In The Assignment","description":"`putenv()` used to accept an assignment string containing a NUL byte and silently truncated it at the NUL byte, setting an environment variable from the part before it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/putenvNullByteValueError.html","inLanguage":"en","dateModified":"2026-07-26T06:32:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"putenv() Rejects NUL Bytes In The Assignment"}]}}</script>

`putenv()` used to accept an assignment string containing a NUL byte and silently truncated it at the NUL byte, setting an environment variable from the part before it. In PHP 8.6, a NUL byte in the argument throws a `ValueError`.

## PHP code

```php
<?php

try {
    var_dump(putenv("FOO\0BAR=1"));
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
putenv(): Argument #1 ($assignment) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [putenv()](https://www.php.net/putenv)

## Error Messages

- [putenv(): Argument #1 ($assignment) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/putenv%28%29%3A-argument-%231-%28%24assignment%29-must-not-contain-any-null-bytes.html)
