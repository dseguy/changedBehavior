# Magic Method __debugInfo() cannot return null

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/debugInfoCannotReturnNull.html","headline":"Magic Method __debugInfo() cannot return null","name":"Magic Method __debugInfo() cannot return null","description":"__debugInfo() is a magic method that returns an array with debug information.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/debugInfoCannotReturnNull.html","inLanguage":"en","dateModified":"2026-08-12T15:27:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Magic Method __debugInfo() cannot return null"}]}}</script>

__debugInfo() is a magic method that returns an array with debug information. It gives a chance to the program to return any useful information, beyond the local properties. It also allows to remove any sensitive information, such as passwords or secrets. Since PHP 8.6, it is not possible to return NULL: the method method must return an array, albeit empty.

## PHP code

```php
<?php

class x {
    function __debugInfo() {
        return null;
    }
}

var_dump(new x);

?>
```

## Before

```text
object(x)#1 (0) {
}
```

## After

```text
PHP Deprecated:  Returning null from x::__debugInfo() is deprecated, return an empty array instead in /codes/debugInfoCannotReturnNull.php on line 9

Deprecated: Returning null from x::__debugInfo() is deprecated, return an empty array instead in /codes/debugInfoCannotReturnNull.php on line 9
object(x)#1 (0) {
}
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [0](https://php-errors.readthedocs.io/en/latest/messages/returning-null-from-%25s%3A%3A__debuginfo%28%29-is-deprecated%2C-return-an-empty-array-instead.html)
