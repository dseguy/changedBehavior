# iterator_count() Also Count Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/iteratorsArray.html","headline":"iterator_count() Also Count Arrays","name":"iterator_count() Also Count Arrays","description":"The PHP native function used to accept only iterators.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/iteratorsArray.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"iterator_count() Also Count Arrays"}]}}</script>

The PHP native function used to accept only iterators. Since PHP 8.1, arrays are also welcomed. 

## PHP code

```php
<?php

print iterator_count([1,2,3]);

?>
```

## Before

```text
Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given
```

## After

```text
3
```

## PHP version change

This behavior changed in 8.2.

## Error Messages

- [Uncaught TypeError: iterator_count(): Argument #1 ($iterator) must be of type Traversable, array given](https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html)
