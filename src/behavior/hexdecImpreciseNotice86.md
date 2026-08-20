# hexdec() Warns When The Result Loses Precision

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/hexdecImpreciseNotice86.html","headline":"hexdec() Warns When The Result Loses Precision","name":"hexdec() Warns When The Result Loses Precision","description":"`hexdec()`, `bindec()`, `octdec()` and `base_convert()` return a `float` when the converted number is too large to fit in a PHP integer.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/hexdecImpreciseNotice86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"hexdec() Warns When The Result Loses Precision"}]}}</script>

`hexdec()`, `bindec()`, `octdec()` and `base_convert()` return a `float` when the converted number is too large to fit in a PHP integer. Until PHP 8.6, this silently lost precision, since a 64-bit float cannot represent every integer up to the represented magnitude exactly. In PHP 8.6, these functions raise a notice when the returned value cannot precisely represent the input number.

## PHP code

```php
<?php

var_dump(hexdec('FFFFFFFFFFFFFFFFFF'));

?>
```

## Before

```text
float(4.722366482869645E+21)
```

## After

```text
PHP Notice:  Input number is larger than PHP_INT_MAX, precision has been lost in conversion in /codes/hexdecImpreciseNotice86.php on line 3

Notice: Input number is larger than PHP_INT_MAX, precision has been lost in conversion in /codes/hexdecImpreciseNotice86.php on line 3
float(4.722366482869645E+21)
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [hexdec()](https://www.php.net/hexdec)

## Error Messages

- [Input number is larger than PHP_INT_MAX, precision has been lost in conversion](https://php-errors.readthedocs.io/en/latest/messages/hexdec%28%29-warns-when-the-result-loses-precision.html)
