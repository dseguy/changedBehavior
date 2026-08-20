# Named Parameters And Variadic

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/named_parameters_and_variadic.html","headline":"Named Parameters And Variadic","name":"Named Parameters And Variadic","description":"It is possible to use the three dots `.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/named_parameters_and_variadic.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Named Parameters And Variadic"}]}}</script>

It is possible to use the three dots `...` operator and named parameters when calling a method. The unpacked array must have named arguments, and so does the arguments after it.



In PHP 8.0, it was not possible.

## PHP code

```php
<?php

function foo($a, ...$b) {
    echo $a.' '.implode(', ', $b);
}

foo(...[b => 1], a: 2);

?>
```

## Before

```text
PHP Fatal error:  Cannot combine named arguments and argument unpacking 

Fatal error: Cannot combine named arguments and argument unpacking 
```

## After

```text
2 1
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Cannot combine named arguments and argument unpacking](https://php-errors.readthedocs.io/en/latest/messages/cannot-combine-named-arguments-and-argument-unpacking.html)
