# ceil() Strict Mode

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ceilStrictMode.html","headline":"ceil() Strict Mode","name":"ceil() Strict Mode","description":"ceil() doesn't accept internal objects that can be converted to integer.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ceilStrictMode.html","inLanguage":"en","dateModified":"2026-01-04T20:56:28+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ceil() Strict Mode"}]}}</script>

ceil() doesn't accept internal objects that can be converted to integer. This is the case for gmp and bcmath objects, as shown in the example. Since PHP 8.0, only integers and floats are allowed.

## PHP code

```php
<?php

$a = gmp_init(123456);

echo ceil($a);

?>
```

## Before

```text
123456
```

## After

```text
PHP Fatal error:  Uncaught TypeError: ceil(): Argument #1 ($num) must be of type int|float, GMP given

Fatal error: Uncaught TypeError: ceil(): Argument #1 ($num) must be of type int|float, GMP given
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [ceil(): Argument #1 ($num) must be of type int|float, GMP given](https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html)
