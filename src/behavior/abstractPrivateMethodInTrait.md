# No Abstract Private Method In Traits

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/abstractPrivateMethodInTrait.html","headline":"No Abstract Private Method In Traits","name":"No Abstract Private Method In Traits","description":"It was not possible to have abstract private methods in a trait.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/abstractPrivateMethodInTrait.html","inLanguage":"en","dateModified":"2026-08-20T15:59:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No Abstract Private Method In Traits"}]}}</script>

It was not possible to have abstract private methods in a trait. There was a conflict between the `abstract`, which required a definition in a child, and `private` which prevented it. 



This was resolved in PHP 8.0 and later.

## PHP code

```php
<?php

trait T { abstract private function foo() ;}

print_r(get_declared_traits());

?>
```

## Before

```text
PHP Fatal error:  Abstract function t::foo() cannot be declared private

Fatal error: Abstract function t::foo() cannot be declared private
```

## After

```text
Array
(
    [0] => t
)
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Abstract function t::foo() cannot be declared private](https://php-errors.readthedocs.io/en/latest/messages/%25s-function-%25s%3A%3A%25s%28%29-cannot-be-declared-private.html)

## Analyzer

- [Traits/NoPrivateAbstract](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/NoPrivateAbstract.html)
