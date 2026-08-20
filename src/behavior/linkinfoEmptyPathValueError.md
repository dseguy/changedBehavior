# linkinfo() Rejects An Empty Path

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/linkinfoEmptyPathValueError.html","headline":"linkinfo() Rejects An Empty Path","name":"linkinfo() Rejects An Empty Path","description":"`linkinfo()` used to accept an empty string as its path argument, emit a warning and return `-1`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/linkinfoEmptyPathValueError.html","inLanguage":"en","dateModified":"2026-07-15T07:59:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"linkinfo() Rejects An Empty Path"}]}}</script>

`linkinfo()` used to accept an empty string as its path argument, emit a warning and return `-1`. In PHP 8.6, an empty path throws a `ValueError`.

## PHP code

```php
<?php

var_dump(linkinfo(''));

?>
```

## Before

```text
PHP Warning:  linkinfo(): No such file or directory

Warning: linkinfo(): No such file or directory
int(-1)
```

## After

```text
linkinfo(): Argument #1 ($path) must not be empty
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [linkinfo()](https://www.php.net/linkinfo)

## Error Messages

- [linkinfo(): Argument #1 ($path) must not be empty](https://php-errors.readthedocs.io/en/latest/messages/linkinfo%28%29%3A-argument-%231-%28%24path%29-must-not-be-empty.html)
