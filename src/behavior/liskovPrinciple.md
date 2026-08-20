# Covariance And Contravariance Are Fatal

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/liskovPrinciple.html","headline":"Covariance And Contravariance Are Fatal","name":"Covariance And Contravariance Are Fatal","description":"Type mismatch between signatures of the same method in different classes of the same hierarchy used to be a warning.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/liskovPrinciple.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Covariance And Contravariance Are Fatal"}]}}</script>

Type mismatch between signatures of the same method in different classes of the same hierarchy used to be a warning. It is not a fatal error, althought it is only checked at execution time, when all the classes are loaded.

## PHP code

```php
<?php

class Foo {
    public function process(stdClass $item): array{}
}

class SuperFoo extends Foo{
    public function process(array $items): array{}
    //                      ^^^^^ mismatch
}

?>
```

## Before

```text
PHP Warning:  Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array 

Warning: Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array 
```

## After

```text
PHP Fatal error:  Declaration of SuperFoo::process(array $items): array must be compatible with Foo::process(stdClass $item): array 

Fatal error: Declaration of SuperFoo::process(array $items): array must be compatible with Foo::process(stdClass $item): array 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Declaration of SuperFoo::process(array $items): array should be compatible with Foo::process(stdClass $item): array](https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s-must-be-compatible-with-%25s.html)
