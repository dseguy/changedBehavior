# Recursive Comparison Of Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/recursiveComparison.html","headline":"Recursive Comparison Of Arrays","name":"Recursive Comparison Of Arrays","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/recursiveComparison.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Recursive Comparison Of Arrays"}]}}</script>

Until PHP 8.4, recursive arrays should not be compared one another, as the engine might ends in an infinite loop.



In PHP 8.4, it is now a catchable Error.



## PHP code

```php
<?php

$array = [1,2,3, &$array];
$array2 = [1,2,3, &$array2];

var_dump($array == $array2);

?>
```

## Before

```text
PHP Fatal error:  Nesting level too deep - recursive dependency?

Fatal error: Nesting level too deep - recursive dependency?
```

## After

```text
PHP Fatal error:  Uncaught Error: Nesting level too deep - recursive dependency? 

Fatal error: Uncaught Error: Nesting level too deep - recursive dependency? 
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Nesting level too deep - recursive dependency? ](https://php-errors.readthedocs.io/en/latest/messages/nesting-level-too-deep---recursive-dependency%3F.html)
