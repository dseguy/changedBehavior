# Integer Used As Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/IntAsArray.html","headline":"Integer Used As Array","name":"Integer Used As Array","description":"An integer is not an array, but it is possible to use the array syntax with it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/IntAsArray.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Integer Used As Array"}]}}</script>

An integer is not an array, but it is possible to use the array syntax with it. The values are then always `null`, and since PHP 7.4, a warning is emitted.

## PHP code

```php
<?php

var_dump(123[0]);

var_dump(1234['dsds']);

?>
```

## Before

```text
NULL
```

## After

```text
PHP Warning:  Trying to access array offset on int

Warning: Trying to access array offset on int
NULL
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Trying to access array offset on %s](https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html)
