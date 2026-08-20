# Init Readonly Properties In Child Class

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/initReadonlyInChild.html","headline":"Init Readonly Properties In Child Class","name":"Init Readonly Properties In Child Class","description":"Readonly properties used to be only assigned a value in their definition class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/initReadonlyInChild.html","inLanguage":"en","dateModified":"2025-11-07T09:49:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Init Readonly Properties In Child Class"}]}}</script>

Readonly properties used to be only assigned a value in their definition class. Even when they were protected, they could not be set in a child context. 



In PHP 8.4, it is now possible. 



On the other hand, initialisation in the global space is still forbidden.

## PHP code

```php
<?php

class x {
	protected readonly int $property;
}

class y extends x {
    function __construct() {
        $this->property = 5;
    }
}

$x = new y;
echo $x->property;

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Cannot initialize readonly property x::$property from scope y
```

## After

```text
5
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Cannot %s readonly property %s::$%s from %s%s](https://php-errors.readthedocs.io/en/latest/messages/cannot-%25s-readonly-property-%25s%3A%3A%24%25s-from-%25s%25s.html)
