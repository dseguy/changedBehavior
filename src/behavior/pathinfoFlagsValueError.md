# pathinfo() Validates Its Flags Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/pathinfoFlagsValueError.html","headline":"pathinfo() Validates Its Flags Argument","name":"pathinfo() Validates Its Flags Argument","description":"`pathinfo()` accepts a second argument made of `PATHINFO_*` constants.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/pathinfoFlagsValueError.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"pathinfo() Validates Its Flags Argument"}]}}</script>

`pathinfo()` accepts a second argument made of `PATHINFO_*` constants. Until PHP 8.6, any other value was silently accepted, and the whole set of parts was returned. In PHP 8.6, an invalid value throws a `ValueError`.

## PHP code

```php
<?php

var_dump(pathinfo('/foo/bar.txt', 999));

?>
```

## Before

```text
string(4) /foo
```

## After

```text
pathinfo(): Argument #2 ($flags) must be one of the PATHINFO_* constants
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [pathinfo()](https://www.php.net/pathinfo)

## Error Messages

- [pathinfo(): Argument #2 ($flags) must be one of the PATHINFO_* constants](https://php-errors.readthedocs.io/en/latest/messages/pathinfo%28%29%3A-argument-%232-%28%24flags%29-must-be-one-of-the-pathinfo_%2A-constants.html)
