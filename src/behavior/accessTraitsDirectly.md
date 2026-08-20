# Accessing Trait Resources Directly Is Not Allowed

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/accessTraitsDirectly.html","headline":"Accessing Trait Resources Directly Is Not Allowed","name":"Accessing Trait Resources Directly Is Not Allowed","description":"It is not possible anymore to use traits just like a standalone class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/accessTraitsDirectly.html","inLanguage":"en","dateModified":"2025-09-24T17:44:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Accessing Trait Resources Directly Is Not Allowed"}]}}</script>

It is not possible anymore to use traits just like a standalone class. As such, accessing methods, properties (and later constants) directly on the trait is not allowed anymore in PHP 8.1 and later. The feature might be removed in PHP 9.0.

Only static resources were accessible via the trait, as it is not possible to instantiate a trait without a class. 

## PHP code

```php
<?php

trait t {
        static function foo() { print __METHOD__;}
        static $x = 'A';
}

echo T::foo();
echo T::$x;

?>
```

## Before

```text
t::fooA
```

## After

```text
PHP Deprecated:  Calling static trait method t::foo is deprecated, it should only be called on a class using the trait

Deprecated: Calling static trait method t::foo is deprecated, it should only be called on a class using the trait
t::fooPHP Deprecated:  Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait

Deprecated: Accessing static trait property t::$x is deprecated, it should only be accessed on a class using the trait
A
```

## PHP version change

This behavior was deprecated in 8.1.

This behavior changed in 9.0.

## Error Messages

- [Calling static trait method t::foo is deprecated, it should only be called on a class using the trait](https://php-errors.readthedocs.io/en/latest/messages/calling-static-trait-method-%25s%3A%3A%25s-is-deprecated.html)

## Analyzer

- [Traits/CannotCallTraitMethod](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/CannotCallTraitMethod.html)
