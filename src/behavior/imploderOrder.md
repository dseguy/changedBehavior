# implode() Arguments Order

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/imploderOrder.html","headline":"implode() Arguments Order","name":"implode() Arguments Order","description":"It was possible to call implode() with a random order of argument : string first, or array first.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/imploderOrder.html","inLanguage":"en","dateModified":"2026-08-20T16:08:25+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"implode() Arguments Order"}]}}</script>

It was possible to call implode() with a random order of argument : string first, or array first. PHP would figure out which one to use. 



In PHP 8.0, it is now compulsory to put the string in the first place, as the types are checked. Or used named parameters.

## PHP code

```php
<?php

print_r(implode([1,2], '3'));

?>
```

## Before

```text
PHP Deprecated:  implode(): Passing glue string after array is deprecated. Swap the parameters 

Deprecated: implode(): Passing glue string after array is deprecated. Swap the parameters 
132
```

## After

```text
PHP Fatal error:  Uncaught TypeError: implode(): Argument #2 ($array) must be of type ?array, string given 

Fatal error: Uncaught TypeError: implode(): Argument #2 ($array) must be of type ?array, string given 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [implode(): Argument #2 ($array) must be of type ?array, string given](https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html)
