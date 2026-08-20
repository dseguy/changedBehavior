# Auto-initialization From Boolean

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/autoInitializeArrayFromBool.html","headline":"Auto-initialization From Boolean","name":"Auto-initialization From Boolean","description":"The auto-initialization is the conversion a boolean `false` or `true`, to an array, by using the array syntax on it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/autoInitializeArrayFromBool.html","inLanguage":"en","dateModified":"2025-09-17T07:06:42+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Auto-initialization From Boolean"}]}}</script>

The auto-initialization is the conversion a boolean `false` or `true`, to an array, by using the array syntax on it.



When applied to a property, it may be impossible, given the type of that property. The warning message also appears if the type allow it: it is recommended to convert the property to an array before using the array syntax.

## PHP code

```php
<?php

class X {
    public bool $property = false;
    public bool|array $property2 = false;
}

$x = new X;
// Fatal error, as type doesn't allow it
$x->property[3] = 2;

// Deprecated error, as type allow it
$x->property2[4] = 5;

?>
```

## Before

```text
PHP Parse error:  syntax error

Parse error: syntax error
```

## After

```text
PHP Fatal error:  Uncaught TypeError: Cannot auto-initialize an array inside property X::$property of type bool

Fatal error: Uncaught TypeError: Cannot auto-initialize an array inside property X::$property of type bool
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Cannot auto-initialize an array inside property %s::$%s of type %s](https://php-errors.readthedocs.io/en/latest/messages/cannot-auto-initialize-an-array-inside-property-%25s%3A%3A%24%25s-of-type-%25s.html)

## Analyzer

- [Php/FalseToArray](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FalseToArray.html)
