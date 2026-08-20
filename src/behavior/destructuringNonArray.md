# Destructuring Non Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/destructuringNonArray.html","headline":"Destructuring Non Arrays","name":"Destructuring Non Arrays","description":"Destructuring non array values emits a warning in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/destructuringNonArray.html","inLanguage":"en","dateModified":"2026-08-12T15:27:26+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Destructuring Non Arrays"}]}}</script>

Destructuring non array values emits a warning in PHP 8.5. This applies to integers, floats, strings and booleans. objects emits a Fatal Error, as before. `null` values are not emitting any warning.

## PHP code

```php
<?php

[$a, $b] = 'abc';
[$a, $b] = 123;
[$a, $b] = true;
[$a, $b] = (object) [1,2];

[$a, $b] = null;  // OK

var_dump($a);

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array 

Fatal error: Uncaught Error: Cannot use object of type stdClass as array 
```

## After

```text
PHP Warning:  Cannot use string as array 

Warning: Cannot use string as array 
PHP Warning:  Cannot use string as array 

Warning: Cannot use string as array 
PHP Warning:  Cannot use int as array 

Warning: Cannot use int as array 
PHP Warning:  Cannot use int as array 

Warning: Cannot use int as array 
PHP Warning:  Cannot use bool as array 

Warning: Cannot use bool as array 
PHP Warning:  Cannot use bool as array 

Warning: Cannot use bool as array 
PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array 

Fatal error: Uncaught Error: Cannot use object of type stdClass as array 
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Cannot use %s as array](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-array.html)
