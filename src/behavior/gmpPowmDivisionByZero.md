# gmp_powm() Reports More Detail On Modulo-By-Zero

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpPowmDivisionByZero.html","headline":"gmp_powm() Reports More Detail On Modulo-By-Zero","name":"gmp_powm() Reports More Detail On Modulo-By-Zero","description":"`gmp_powm()` has thrown a `DivisionByZeroError` when its `$modulus` argument is zero since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpPowmDivisionByZero.html","inLanguage":"en","dateModified":"2026-09-01T07:50:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"gmp_powm() Reports More Detail On Modulo-By-Zero"}]}}</script>

`gmp_powm()` has thrown a `DivisionByZeroError` when its `$modulus` argument is zero since PHP 8.0; this is not new in PHP 8.6. Until PHP 8.6, the exception message was the generic `Modulo by zero`, giving no clue about which function or argument caused it. In PHP 8.6, the message is prefixed with the function name and the offending argument, becoming `gmp_powm(): Argument #3 ($modulus) Modulo by zero`.

## PHP code

```php
<?php

try {
    var_dump(gmp_strval(gmp_powm(2, 3, 0)));
} catch (\DivisionByZeroError $e) {
    echo "DivisionByZeroError: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
DivisionByZeroError: Modulo by zero
```

## After

```text
DivisionByZeroError: gmp_powm(): Argument #3 ($modulus) Modulo by zero
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [gmp_powm](https://www.php.net/gmp_powm)
- [DivisionByZeroError](https://www.php.net/class.divisionbyzeroerror)

## Error Messages

- [gmp_powm(): Argument #3 ($modulus) Modulo by zero](https://php-errors.readthedocs.io/en/latest/messages/gmp_powm%28%29-reports-more-detail-on-modulo-by-zero.html)
