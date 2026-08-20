# Strings Are Bigger Than Integers

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/stringsBiggerThanIntegers.html","headline":"Strings Are Bigger Than Integers","name":"Strings Are Bigger Than Integers","description":"When comparing strings and integers with inequalities (`<`, `=<`, `>`, `>=`), strings used to be smaller than numbers and they are bigger than numbers in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/stringsBiggerThanIntegers.html","inLanguage":"en","dateModified":"2026-02-06T21:35:52+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Strings Are Bigger Than Integers"}]}}</script>

When comparing strings and integers with inequalities (`<`, `=<`, `>`, `>=`), strings used to be smaller than numbers and they are bigger than numbers in PHP 8.0. Unless, they can be converted to integer safely.

## PHP code

```php
<?php

var_dump('a' > -1);
var_dump('a' > 0);
var_dump('a' > 1);

var_dump('a' < -1);
var_dump('a' < 0);
var_dump('a' < 1);

?>
```

## Before

```text
bool(true)
bool(false)
bool(false)

bool(false)
bool(false)
bool(true)
```

## After

```text
bool(true)
bool(true)
bool(true)

bool(false)
bool(false)
bool(false)
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [PHP RFC: Saner string to number comparisons](https://wiki.php.net/rfc/string_to_number_comparison)
