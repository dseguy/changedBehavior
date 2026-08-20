# get_class() Needs An Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_classWithoutArgument.html","headline":"get_class() Needs An Argument","name":"get_class() Needs An Argument","description":"get_class() had a default behavior, where the current class would be returned when get_class() is called without arguments.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_classWithoutArgument.html","inLanguage":"en","dateModified":"2025-09-19T17:07:27+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"get_class() Needs An Argument"}]}}</script>

get_class() had a default behavior, where the current class would be returned when get_class() is called without arguments. This is now deprecated.



It is also deprecated for get_parent_class(). 

## PHP code

```php
<?php

class x {
        function foo() {
                echo get_class();
                echo get_parent_class();
        }
}

(new x)->foo();

?>
```

## Before

```text
x
```

## After

```text
Calling get_class() without arguments is deprecated
```

## PHP version change

This behavior was deprecated in 8.3.

This behavior changed in 9.0.

## Error Messages

- [Calling get_class() without arguments is deprecated](https://php-errors.readthedocs.io/en/latest/messages/calling-get_class%28%29-without-arguments-is-deprecated.html)

## Analyzer

- [Structures/NoGetClassNull](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NoGetClassNull.html)
