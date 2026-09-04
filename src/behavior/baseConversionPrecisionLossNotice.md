# Base Conversion Functions Warn When Precision Is Lost

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/baseConversionPrecisionLossNotice.html","headline":"Base Conversion Functions Warn When Precision Is Lost","name":"Base Conversion Functions Warn When Precision Is Lost","description":"`bindec()`, `octdec()`, `hexdec()` and `base_convert()` all share the same internal conversion routine, which accumulates the result in a platform integer for as long as it fits, then switches to a `float` once the value would overflow.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/baseConversionPrecisionLossNotice.html","inLanguage":"en","dateModified":"2026-09-04T15:19:20+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Base Conversion Functions Warn When Precision Is Lost"}]}}</script>

`bindec()`, `octdec()`, `hexdec()` and `base_convert()` all share the same internal conversion routine, which accumulates the result in a platform integer for as long as it fits, then switches to a `float` once the value would overflow. That switch already happened silently before PHP 8.6: a `double` only has 53 bits of mantissa, so digits beyond that are rounded away without any indication. In PHP 8.6, the switch to float now also emits an `E_NOTICE`, while the returned value is unchanged.

## PHP code
```php
<?php

var_dump(hexdec('FFFFFFFFFFFFFFFF'));

?>
```
## Before
```text
float(1.8446744073709552E+19)
```
## After
```text
PHP Notice:  Input number is larger than PHP_INT_MAX, precision has been lost in conversion in /codes/baseConversionPrecisionLossNotice.php on line 3

Notice: Input number is larger than PHP_INT_MAX, precision has been lost in conversion in /codes/baseConversionPrecisionLossNotice.php on line 3
float(1.8446744073709552E+19)
```
## PHP version change
This behavior changed in 8.6.

## See Also

- [hexdec()](https://www.php.net/hexdec)
- [PR #22371](https://github.com/php/php-src/pull/22371)

## Error Messages

- [Input number is larger than PHP_INT_MAX, precision has been lost in conversion](https://php-errors.readthedocs.io/en/latest/messages/input-number-is-larger-than-php_int_max%2C-precision-has-been-lost-in-conversion.html)

## Extension
- [standard](../extension.md#standard)