# is_double(), is_long(), is_integer() And doubleval() Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/isDoubleIsLongDoubleValDeprecated.html","headline":"is_double(), is_long(), is_integer() And doubleval() Are Deprecated","name":"is_double(), is_long(), is_integer() And doubleval() Are Deprecated","description":"`is_double()`, `is_long()`, `is_integer()` and `doubleval()` have always been pure aliases for `is_float()`, `is_int()`, `is_int()` and `floatval()` respectively.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/isDoubleIsLongDoubleValDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:48:18+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"is_double(), is_long(), is_integer() And doubleval() Are Deprecated"}]}}</script>

`is_double()`, `is_long()`, `is_integer()` and `doubleval()` have always been pure aliases for `is_float()`, `is_int()`, `is_int()` and `floatval()` respectively. Until PHP 8.6, calling any of these aliases produced no diagnostic. In PHP 8.6, calling any of them emits a deprecation notice pointing to the canonical function name, even though the alias keeps working exactly as before.

## PHP code

```php
<?php

var_dump(is_double(1.5));
var_dump(is_long(1));
var_dump(is_integer(1));
var_dump(doubleval("1.5"));

?>
```

## Before

```text
bool(true)
bool(true)
bool(true)
float(1.5)
```

## After

```text
PHP Deprecated:  Function is_double() is deprecated since 8.6, use is_float() instead

Deprecated: Function is_double() is deprecated since 8.6, use is_float() instead
bool(true)
PHP Deprecated:  Function is_long() is deprecated since 8.6, use is_int() instead

Deprecated: Function is_long() is deprecated since 8.6, use is_int() instead
bool(true)
PHP Deprecated:  Function is_integer() is deprecated since 8.6, use is_int() instead

Deprecated: Function is_integer() is deprecated since 8.6, use is_int() instead
bool(true)
PHP Deprecated:  Function doubleval() is deprecated since 8.6, use floatval() instead

Deprecated: Function doubleval() is deprecated since 8.6, use floatval() instead
float(1.5)
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [is_double()](https://www.php.net/is_double)
- [is_float()](https://www.php.net/is_float)
- [is_long()](https://www.php.net/is_long)
- [is_integer()](https://www.php.net/is_integer)
- [is_int()](https://www.php.net/is_int)
- [doubleval()](https://www.php.net/doubleval)
- [floatval()](https://www.php.net/floatval)

## Error Messages

- [Function is_double() is deprecated since 8.6, use is_float() instead](https://php-errors.readthedocs.io/en/latest/messages/function-is_double%28%29-is-deprecated-since-8.6%2C-use-is_float%28%29-instead.html)
- [Function is_long() is deprecated since 8.6, use is_int() instead](https://php-errors.readthedocs.io/en/latest/messages/function-is_long%28%29-is-deprecated-since-8.6%2C-use-is_int%28%29-instead.html)
- [Function is_integer() is deprecated since 8.6, use is_int() instead](https://php-errors.readthedocs.io/en/latest/messages/function-is_integer%28%29-is-deprecated-since-8.6%2C-use-is_int%28%29-instead.html)
- [Function doubleval() is deprecated since 8.6, use floatval() instead](https://php-errors.readthedocs.io/en/latest/messages/function-doubleval%28%29-is-deprecated-since-8.6%2C-use-floatval%28%29-instead.html)
