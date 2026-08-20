# assert Is Reserved Function

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assertIsReserved.html","headline":"assert Is Reserved Function","name":"assert Is Reserved Function","description":"It is not possible to create a function named `assert` anymore in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assertIsReserved.html","inLanguage":"en","dateModified":"2026-01-20T16:03:42+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"assert Is Reserved Function"}]}}</script>

It is not possible to create a function named `assert` anymore in PHP 8.0. This applies to every scopes, global or custom. 



Until PHP 8.0, it was possible.



## PHP code

```php
<?php

function assert() {}

?>
```

## Before

```text
PHP Deprecated:  Defining a custom assert() function is deprecated, as the function has special semantics

Deprecated: Defining a custom assert() function is deprecated, as the function has special semantics
PHP Fatal error:  Cannot redeclare assert()

Fatal error: Cannot redeclare assert()
```

## After

```text
PHP Fatal error:  Defining a custom assert() function is not allowed, as the function has special semantics

Fatal error: Defining a custom assert() function is not allowed, as the function has special semantics
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## Error Messages

- [Defining a custom assert() function is deprecated, as the function has special semantics](https://php-errors.readthedocs.io/en/latest/messages/defining-a-custom-assert%28%29-function-is-not-allowed%2C.html)

## Analyzer

- [Php/AssertFunctionIsReserved](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/AssertFunctionIsReserved.html)
