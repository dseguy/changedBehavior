# No min() On Empty Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/minOnEmpty.html","headline":"No min() On Empty Array","name":"No min() On Empty Array","description":"min() does not accept an empty array as argument.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/minOnEmpty.html","inLanguage":"en","dateModified":"2025-09-27T07:49:42+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No min() On Empty Array"}]}}</script>

min() does not accept an empty array as argument. In that case, it used to return NULL, but NULL is also a valid return value, and it is not possible to differentiate between the NULL of an empty array and the NULL that is really a minimum value. 

## PHP code

```php
<?php

min([]);

?>
```

## Before

```text
PHP Warning:  min(): Array must contain at least one element 

Warning: min(): Array must contain at least one element
```

## After

```text
PHP Fatal error:  Uncaught ValueError: min(): Argument #1 ($value) must contain at least one element in codes/minOnEmpty.php:3

Fatal error: Uncaught ValueError: min(): Argument #1 ($value) must contain at least one element in codes/minOnEmpty.php:3
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Array must contain at least one element](https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24value%29-must-contain-at-least-one-element.html)

## Analyzer

- [Structures/NoMaxOnEmptyArray](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NoMaxOnEmptyArray.html)
