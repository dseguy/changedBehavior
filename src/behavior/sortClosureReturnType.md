# Sorting Closure Must Return Integers

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sortClosureReturnType.html","headline":"Sorting Closure Must Return Integers","name":"Sorting Closure Must Return Integers","description":"Comparison closures used in custom sorting need to return an integer, while they used to yield true or false.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sortClosureReturnType.html","inLanguage":"en","dateModified":"2026-02-25T23:40:07+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Sorting Closure Must Return Integers"}]}}</script>

Comparison closures used in custom sorting need to return an integer, while they used to yield true or false. This applies to all custom sorting functions, including usort(), uasort(), and uksort().



There is no performance penalty nor gain with the usage of that returntype.

## PHP code

```php
<?php

$array = [1, 2, 3];

// Replace
usort($array, fn($a, $b) : bool => $a > $b);
// With
usort($array, fn($a, $b) : int => $a <=> $b);

print_r($array);
?>
```

## Before

```text
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
```

## After

```text
PHP Deprecated:  usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero

Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
```

## PHP version change

This behavior was deprecated in 8.0.

This behavior changed in 9.0.

## Error Messages

- [usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero](https://php-errors.readthedocs.io/en/latest/messages/returning-bool-from-comparison-function-is-deprecated%2C-return-an-integer-less-than%2C-equal-to%2C-or-greater-than-zero.html)

## Analyzer

- [Php/ReturnTypeForSorting](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ReturnTypeForSorting.html)
