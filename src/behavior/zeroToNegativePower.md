# Cannot Raise Zero To Negative Powers

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/zeroToNegativePower.html","headline":"Cannot Raise Zero To Negative Powers","name":"Cannot Raise Zero To Negative Powers","description":"Raising 0 to a negative power used to generate a `INF` value, aka infinity.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/zeroToNegativePower.html","inLanguage":"en","dateModified":"2026-02-26T11:12:52+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Cannot Raise Zero To Negative Powers"}]}}</script>

Raising 0 to a negative power used to generate a `INF` value, aka infinity. The standard behavior is to generate a `DivisionByZeroError`, as this is not mathematically allowed. This behavior is deprecated in PHP 8.4, and will be removed in PHP 8.4. During the transition, a function called `fpow()` is provided, with the new behavior.

## PHP code

```php
<?php

var_dump(0 ** -1); //Deprecated: Zero raised to a negative power is deprecated

?>
```

## Before

```text
float(INF)
```

## After

```text
PHP Deprecated:  Power of base 0 and negative exponent is deprecated

Deprecated: Power of base 0 and negative exponent is deprecated
float(INF)
```

## PHP version change

This behavior was deprecated in 8.4.

This behavior changed in 9.0.

## See Also

- [fpow](https://www.php.net/manual/fr/function.fpow.php)
- [pow](https://www.php.net/manual/fr/function.pow.php)

## Error Messages

- [Power of base 0 and negative exponent is deprecated](https://php-errors.readthedocs.io/en/latest/messages/power-of-base-0-and-negative-exponent-is-deprecated.html)

## Analyzer

- [Structures/NegativePow](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NegativePow.html)
