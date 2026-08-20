# number_format() Validates Its Decimals Argument Range

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/numberFormatDecimalsValueError.html","headline":"number_format() Validates Its Decimals Argument Range","name":"number_format() Validates Its Decimals Argument Range","description":"`number_format()`'s `$decimals` argument is internally clamped to a 32-bit signed integer range (-2147483648 to 2147483647).","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/numberFormatDecimalsValueError.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"number_format() Validates Its Decimals Argument Range"}]}}</script>

`number_format()`'s `$decimals` argument is internally clamped to a 32-bit signed integer range (-2147483648 to 2147483647). Until PHP 8.6, a value outside that range was silently clamped, for very negative values this collapsed to 0 decimals, and for very large positive values it could trigger a huge memory allocation while building the result string. In PHP 8.6, an out-of-range value throws a `ValueError` instead.

## PHP code

```php
<?php

try {
    var_dump(number_format(1234.5678, PHP_INT_MIN));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
string(1) 0
```

## After

```text
number_format(): Argument #2 ($decimals) must be between -2147483648 and 2147483647
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [number_format()](https://www.php.net/number_format)

## Error Messages

- [number_format(): Argument #2 ($decimals) must be between -2147483648 and 2147483647](https://php-errors.readthedocs.io/en/latest/messages/number_format%28%29%3A-argument-%232-%28%24decimals%29-must-be-between--2147483648-and-2147483647.html)
