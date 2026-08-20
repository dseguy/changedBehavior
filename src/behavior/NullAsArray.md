# Null Used As Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArray.html","headline":"Null Used As Array","name":"Null Used As Array","description":"Null is not an array, but it is possible to use the array syntax with it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArray.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Null Used As Array"}]}}</script>

Null is not an array, but it is possible to use the array syntax with it. The values are then always `null`, and since PHP 7.4, a warning is emitted.

## PHP code

```php
<?php

var_dump(null[0]);

var_dump(null['dsds']);

?>
```

## Before

```text
NULL
```

## After

```text
PHP Warning:  Trying to access array offset on null 

Warning: Trying to access array offset on null 
NULL
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Trying to access array offset on %s](https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html)
