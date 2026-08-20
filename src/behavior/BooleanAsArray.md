# Boolean Used As Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/BooleanAsArray.html","headline":"Boolean Used As Array","name":"Boolean Used As Array","description":"Booleans, `true` and `false` are not an array, but it is possible to use the array syntax with it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/BooleanAsArray.html","inLanguage":"en","dateModified":"2025-09-03T17:13:45+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Boolean Used As Array"}]}}</script>

Booleans, `true` and `false` are not an array, but it is possible to use the array syntax with it. The values are then always `null`, and since PHP 7.4, a warning is emitted.

## PHP code

```php
<?php

// var_dump(true[0]); is not a valid PHP syntax

const MY_CONSTANT = true;
var_dump(MY_CONSTANT[0]);

?>
```

## Before

```text
NULL
```

## After

```text
PHP Warning:  Trying to access array offset on true

Warning: Trying to access array offset on null
PHP
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Trying to access array offset on %s](https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html)

## Analyzer

- [Php/FalseToArray](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FalseToArray.html)
