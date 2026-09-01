# Several GMP Functions Validate Their Numeric Arguments

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpFunctionsValueError.html","headline":"Several GMP Functions Validate Their Numeric Arguments","name":"Several GMP Functions Validate Their Numeric Arguments","description":"`gmp_fact()` accepts a `GMP` object as its `$num` argument.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpFunctionsValueError.html","inLanguage":"en","dateModified":"2026-09-01T07:55:48+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Several GMP Functions Validate Their Numeric Arguments"}]}}</script>

`gmp_fact()` accepts a `GMP` object as its `$num` argument. Until PHP 8.6, a value outside the range of an unsigned long was silently misinterpreted, so `gmp_fact()` returned an unrelated, incorrect result instead of failing. In PHP 8.6, such a value throws a `ValueError`. The same release also refines the `ValueError` messages already thrown by `gmp_pow()`, `gmp_binomial()`, `gmp_root()` and `gmp_rootrem()` for an out-of-range second argument (`$exponent`, `$k` or `$nth`), now stating the full valid range instead of only the lower bound.

## PHP code

```php
<?php

$huge = gmp_init('18446744073709551616');

try {
    var_dump(gmp_strval(gmp_fact($huge)));
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
string(1) "1" 
```

## After

```text
ValueError: gmp_fact(): Argument #1 ($num) must be between 0 and 18446744073709551615
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [gmp_fact](https://www.php.net/gmp_fact)
- [gmp_pow](https://www.php.net/gmp_pow)
- [gmp_binomial](https://www.php.net/gmp_binomial)
- [gmp_root](https://www.php.net/gmp_root)
- [gmp_rootrem](https://www.php.net/gmp_rootrem)

## Error Messages

- [gmp_fact(): Argument #1 ($num) must be between 0 and 18446744073709551615](https://php-errors.readthedocs.io/en/latest/messages/several-gmp-functions-validate-their-numeric-arguments.html)
