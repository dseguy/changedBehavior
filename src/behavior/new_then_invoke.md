# Direct calls on new

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/new_then_invoke.html","headline":"Direct calls on new","name":"Direct calls on new","description":"Calling an object directly upon instantiation was not possible in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/new_then_invoke.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Direct calls on new"}]}}</script>

Calling an object directly upon instantiation was not possible in PHP 8.3: it required parenthesis, like every other `new` call.



In PHP 8.4, it is now possible to call a method or access a property directly at instantiation time. It is also possible to call its `__invoke` method.

## PHP code

```php
<?php

class x {
    function __construct($i = 0) { echo __METHOD__.PHP_EOL;}
    
    function __invoke()          { echo __METHOD__.PHP_EOL;}
}

$x = new x;

$y = new $x()();
// identical to 
//$y = (new $x(0)) ()

var_dump($y);
// NULL 

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected token "(" 

Parse error: syntax error, unexpected token "(" 
```

## After

```text
x::__construct
x::__construct
x::__invoke
NULL
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [syntax error, unexpected token "("](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22.html)
