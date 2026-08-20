# getenv() Rejects NUL Bytes In The Variable Name

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/getenvNullByteValueError.html","headline":"getenv() Rejects NUL Bytes In The Variable Name","name":"getenv() Rejects NUL Bytes In The Variable Name","description":"`getenv()` used to accept a variable name containing a NUL byte, and simply returned `false` since no such variable can exist.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/getenvNullByteValueError.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"getenv() Rejects NUL Bytes In The Variable Name"}]}}</script>

`getenv()` used to accept a variable name containing a NUL byte, and simply returned `false` since no such variable can exist. In PHP 8.6, a NUL byte in the name argument throws a `ValueError`.

## PHP code

```php
<?php

var_dump(getenv("FOO\0BAR"));

?>
```

## Before

```text
bool(false)
```

## After

```text
getenv(): Argument #1 ($name) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [getenv()](https://www.php.net/getenv)

## Error Messages

- [getenv(): Argument #1 ($name) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/getenv%28%29%3A-argument-%231-%28%24name%29-must-not-contain-any-null-bytes.html)
