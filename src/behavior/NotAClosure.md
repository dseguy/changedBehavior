# Not In A Closure

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NotAClosure.html","headline":"Not In A Closure","name":"Not In A Closure","description":"Calling `Closure` native methods outside a closure or an arrow function leads to an error message.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NotAClosure.html","inLanguage":"en","dateModified":"2026-01-26T13:57:49+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Not In A Closure"}]}}</script>

Calling `Closure` native methods outside a closure or an arrow function leads to an error message. 



This applies to functions or methods, that are later turned into a closure with the first class callable syntax: while that syntax creates a closure, the underlying code is not a closure, and cannot access the related features.



The warning message, used in previous PHP version, was not as explicit as the new one.

## PHP code

```php
<?php

function foo() {
    Closure::getCurrent();
}

foo(); // Error

foo(...)(); // Error: foo was put inside a closure, but it is still not a closure itself.

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Call to undefined method Closure::getCurrent()
```

## After

```text
PHP Fatal error:  Uncaught Error: Current function is not a closure

Fatal error: Uncaught Error: Current function is not a closure
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Call to undefined method Closure::getCurrent()](https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-method-%25s%3A%3A%25s%28%29.html)
- [Current function is not a closure](https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-method-%25s%3A%3A%25s%28%29.html)
