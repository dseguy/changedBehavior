# Dot And Minus Changed Precedence

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndMinus.html","headline":"Dot And Minus Changed Precedence","name":"Dot And Minus Changed Precedence","description":"The dot (concatenation) and substraction - operators have a distinct priority in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndMinus.html","inLanguage":"en","dateModified":"2025-10-31T16:57:39+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Dot And Minus Changed Precedence"}]}}</script>

The dot (concatenation) and substraction - operators have a distinct priority in PHP 8.0. In particular, - has now precedence. 

## PHP code

```php
<?php

echo 3 . 4 - 5;

?>
```

## Before

```text
PHP Deprecated:  The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence

Deprecated: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence
29
```

## After

```text
3-1
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## See Also

- [Migration PHP 8.0](https://www.php.net/manual/en/migration80.incompatible.php)

## Error Messages

- [The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence](https://php-errors.readthedocs.io/en/latest/messages/the-behavior-of-unparenthesized-expressions-containing-both-%27.%27-and-%27%2B%27-%27-%27-will-change-in-php-8%3A-%27%2B%27-%27-%27-will-take-a-higher-precedence.html)

## Analyzer

- [Php/ConcatAndAddition](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ConcatAndAddition.html)
