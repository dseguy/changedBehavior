# GMP Shift Operators Validate A GMP Right Operand

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpShiftValueError86.html","headline":"GMP Shift Operators Validate A GMP Right Operand","name":"GMP Shift Operators Validate A GMP Right Operand","description":"The GMP shift operators (`<<` and `>>`) accept a right operand outside the range of a regular PHP integer when it is itself a `GMP` object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpShiftValueError86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"GMP Shift Operators Validate A GMP Right Operand"}]}}</script>

The GMP shift operators (`<<` and `>>`) accept a right operand outside the range of a regular PHP integer when it is itself a `GMP` object. Until PHP 8.6, a right operand greater than the platform's unsigned long maximum was silently truncated, producing an incorrect shift amount. In PHP 8.6, a right operand outside the unsigned long range throws a `ValueError`.

## PHP code

```php
<?php

$a = gmp_init(2);
$huge = gmp_init('18446744073709551616');

try {
    var_dump(gmp_strval($a << $huge));
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
string(1) "2" 
```

## After

```text
ValueError: Shift must be between 0 and 18446744073709551615
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [GMP](https://www.php.net/gmp)

## Error Messages

- [Shift must be between 0 and 18446744073709551615](https://php-errors.readthedocs.io/en/latest/messages/gmp-shift-operators-validate-a-gmp-right-operand.html)
