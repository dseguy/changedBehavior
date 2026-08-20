# round() Mode Validation

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/roundParameterValidation.html","headline":"round() Mode Validation","name":"round() Mode Validation","description":"The `round()` function has four modes, defined with four constants.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/roundParameterValidation.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"round() Mode Validation"}]}}</script>

The `round()` function has four modes, defined with four constants. When the third argument is not one of those four constants, PHP used to silently use `PHP_ROUND_HALF_UP` as default value. In PHP 8.4, a `ValueError` is thrown.

## PHP code

```php
<?php

print $a = round(1.2, 2, 333);

?>
```

## Before

```text
1
```

## After

```text
round(): Argument #3 ($mode) must be a valid rounding mode (PHP_ROUND_*)
```

## PHP version change

This behavior changed in 8.4.

## See Also

- [round()](https://www.php.net/round)

## Error Messages

- [must be a valid rounding mode (RoundingMode::*)](https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-rounding-mode-%28roundingmode%3A%3A%2A%29.html)
