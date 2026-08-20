# explode() Forbids Empty Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/explodeWithEmptyString.html","headline":"explode() Forbids Empty Strings","name":"explode() Forbids Empty Strings","description":"explode() doesn't work on empty strings, as delimiter (first argument).","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/explodeWithEmptyString.html","inLanguage":"en","dateModified":"2026-08-12T15:28:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"explode() Forbids Empty Strings"}]}}</script>

explode() doesn't work on empty strings, as delimiter (first argument). It used to be a warning and a returned value of false, it is now a Fatal error. 

## PHP code

```php
<?php

explode('', 'abc');

?>
```

## Before

```text
PHP Warning:  explode(): Empty delimiter

Warning: explode(): Empty delimiter
```

## After

```text
PHP Fatal error:  Uncaught ValueError: explode(): Argument #1 ($separator) cannot be empty

Fatal error: Uncaught ValueError: explode(): Argument #1 ($separator) cannot be empty
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [explode](https://www.php.net/manual/en/function.explode.php)

## Error Messages

- [Empty delimiter](https://php-errors.readthedocs.io/en/latest/messages/empty-delimiter.html)
