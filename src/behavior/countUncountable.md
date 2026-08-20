# count() Must Count Countable

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/countUncountable.html","headline":"count() Must Count Countable","name":"count() Must Count Countable","description":"PHP used to count any kind of value.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/countUncountable.html","inLanguage":"en","dateModified":"2026-01-20T06:24:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"count() Must Count Countable"}]}}</script>

PHP used to count any kind of value. Most values would then be counted as one. This is not possible anymore in PHP 8.0. It requires an array or a `countable` object. This can be tested with `is_countable`.

## PHP code

```php
<?php

print count(3);

?>
```

## Before

```text
PHP Warning:  count(): Parameter must be an array or an object that implements Countable

Warning: count(): Parameter must be an array or an object that implements Countable
1
```

## After

```text
PHP Fatal error:  Uncaught TypeError: count(): Argument #1 ($value) must be of type Countable|array, int given

Fatal error: Uncaught TypeError: count(): Argument #1 ($value) must be of type Countable|array, int given
```

## PHP version change

This behavior was deprecated in 7.2.

This behavior changed in 8.0.

## Error Messages

- [count(): Argument #1 ($value) must be of type Countable|array, int given](https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-%28%24%25s%29-must-be-of-type-%25s%2C-%25s-given.html)

## Analyzer

- [Structures/CanCountNonCountable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/CanCountNonCountable.html)
