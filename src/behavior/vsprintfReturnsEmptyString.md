# vsprintf() Returns Empty String On Error

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/vsprintfReturnsEmptyString.html","headline":"vsprintf() Returns Empty String On Error","name":"vsprintf() Returns Empty String On Error","description":"`vsprintf()` always returns a string, or raises an exception.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/vsprintfReturnsEmptyString.html","inLanguage":"en","dateModified":"2026-02-06T21:32:33+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"vsprintf() Returns Empty String On Error"}]}}</script>

`vsprintf()` always returns a string, or raises an exception. Until PHP 8.0, it used to return `false` in case of error. Errors include having insufficient arguments in the second argument's array.

## PHP code

```php
<?php

var_dump(vsprintf("%04d-%02d-%02d", []));

?>
```

## Before

```text
Warning: vsprintf(): Too few arguments in /in/1pYdW on line 3
bool(false)
```

## After

```text
Fatal error: Uncaught ValueError: The arguments array must contain 3 items, 0 given
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [The arguments array must contain %d items, %d given](https://php-errors.readthedocs.io/en/latest/messages/the-arguments-array-must-contain-%25d-items%2C-%25d-given.html)
