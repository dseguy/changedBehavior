# Creating Object On Null

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/creatingObjectOnNull.html","headline":"Creating Object On Null","name":"Creating Object On Null","description":"Until PHP 8, it was possible to create an object just like a variable: simply by assigning a value to one property.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/creatingObjectOnNull.html","inLanguage":"en","dateModified":"2026-02-01T20:57:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Creating Object On Null"}]}}</script>

Until PHP 8, it was possible to create an object just like a variable: simply by assigning a value to one property. The created object was of class `stdClass`, and could be used further.



In PHP 8.0, this is now a Fatal error. Later, undefined properties, also known as `dynamic properties` were deprecated, and will lead to a Fatal error in PHP 9.

## PHP code

```php
<?php

$x->a = 1;

print $x->a;

?>
```

## Before

```text
PHP Warning:  Creating default object from empty value 

Warning: Creating default object from empty value 
1
```

## After

```text
PHP Fatal error:  Uncaught Error: Attempt to assign property "a" on null 

Fatal error: Uncaught Error: Attempt to assign property "a" on null 
```

## PHP version change

This behavior was deprecated in 7.3.

This behavior changed in 8.0.

## Error Messages

- [Creating default object from empty value](https://php-errors.readthedocs.io/en/latest/messages/creating-default-object-from-empty-value.html)

## Analyzer

- [Structures/CreatingObjectOnNull](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/CreatingObjectOnNull.html)
