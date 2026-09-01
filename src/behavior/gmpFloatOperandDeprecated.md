# GMP Shift And Power Operators Deprecate Float Operands

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpFloatOperandDeprecated.html","headline":"GMP Shift And Power Operators Deprecate Float Operands","name":"GMP Shift And Power Operators Deprecate Float Operands","description":"The `**`, `<<` and `>>` operators accept a `float` as the non-`GMP` operand when the other operand is a `GMP` object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/gmpFloatOperandDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:56:18+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"GMP Shift And Power Operators Deprecate Float Operands"}]}}</script>

The `**`, `<<` and `>>` operators accept a `float` as the non-`GMP` operand when the other operand is a `GMP` object. Until PHP 8.6, a float such as `2.5` was silently truncated to an integer before being used as the exponent or shift amount, discarding its fractional part without warning. In PHP 8.6, a float that would lose precision when converted emits a deprecation notice, `Implicit conversion from float 2.5 to int loses precision`, before still truncating it the same way.

## PHP code
```php
<?php

var_dump(gmp_strval(gmp_init(2) ** 2.5));
var_dump(gmp_strval(gmp_init(8) << 2.5));

?>
```
## Before
```text
string(1) "4" 
string(2) "32" 
```
## After
```text
PHP Deprecated:  Implicit conversion from float 2.5 to int loses precision in /codes/gmpFloatOperandDeprecated.php on line 3

Deprecated: Implicit conversion from float 2.5 to int loses precision in /codes/gmpFloatOperandDeprecated.php on line 3
string(1) "4" 
PHP Deprecated:  Implicit conversion from float 2.5 to int loses precision in /codes/gmpFloatOperandDeprecated.php on line 4

Deprecated: Implicit conversion from float 2.5 to int loses precision in /codes/gmpFloatOperandDeprecated.php on line 4
string(2) "32" 
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [GMP](https://www.php.net/gmp)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Implicit conversion from float 2.5 to int loses precision](https://php-errors.readthedocs.io/en/latest/messages/gmp-shift-and-power-operators-deprecate-float-operands.html)

## Extension
- [gmp](../extension.md#gmp)