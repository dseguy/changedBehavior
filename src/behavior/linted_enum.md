# Duplicate Enum Cases Are Not Linted Anymore

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/linted_enum.html","headline":"Duplicate Enum Cases Are Not Linted Anymore","name":"Duplicate Enum Cases Are Not Linted Anymore","description":"Two different cases in an enumeration cannot have duplicate values.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/linted_enum.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Duplicate Enum Cases Are Not Linted Anymore"}]}}</script>

Two different cases in an enumeration cannot have duplicate values. 



In PHP 8.1, it was a compilation error, and the code would not be executed. 



Since PHP 8.2, it is only checked at execution time, when the enumeration is first used. This means that it may be a hidden bug, until that code is actually used.

## PHP code

```php
<?php

enum A : int{
    case A = 1;
    case B = 1;
}

function foo(?A $x = null) { 
    var_dump($x);
}

// A is not used, as it default to NULL
foo();

?>
```

## Before

```text
Fatal error: Duplicate value in enum A for cases A and B
```

## After

```text
NULL
```

## PHP version change

This behavior changed in 8.2.

## See Also

- [Enumeration](https://www.php.net/manual/en/language.types.enumerations.php)

## Error Messages

- [Duplicate value in enum A for cases A and B](https://php-errors.readthedocs.io/en/latest/messages/duplicate-value-in-enum-%25s-for-cases-%25s-and-%25s.html)
