# array_merge() And Variadic

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_merge_and_variadic.html","headline":"array_merge() And Variadic","name":"array_merge() And Variadic","description":"array_merge() always needed at least one argument to execute.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_merge_and_variadic.html","inLanguage":"en","dateModified":"2026-08-20T16:11:49+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array_merge() And Variadic"}]}}</script>

array_merge() always needed at least one argument to execute. This means that using the variadic operator on an empty array yielded no argument, and then, an error.



Since PHP 7.4, array_merge() handles graciously the case of no arguments, by returning an empty array, and not more error.



This applies to array_merge() and array_merge_recursive().

## PHP code

```php
<?php

$array = [];

$array2 = array_merge(...$array);

print_r($array2);

?>
```

## Before

```text
PHP Warning:  array_merge() expects at least 1 parameter, 0 given

Warning: array_merge() expects at least 1 parameter, 0 given
```

## After

```text
Array
(
)
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [array_merge() expects at least 1 parameter, 0 given](https://php-errors.readthedocs.io/en/latest/messages/array_merge%28%29-expects-at-least-1-parameter%2C-0-given.html)

## Analyzer

- [Structures/ArrayMergeAndVariadic](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/ArrayMergeAndVariadic.html)
