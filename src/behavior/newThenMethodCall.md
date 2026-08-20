# Call Method On New

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/newThenMethodCall.html","headline":"Call Method On New","name":"Call Method On New","description":"It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/newThenMethodCall.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Call Method On New"}]}}</script>

It was not possible to call a method directly after instantiating an object: the instantiation had to be done within a parenthesis. 



In PHP 8.4, it is now possible to call directly a method after instantiation, as long as the new call includes the parenthesises. 

## PHP code

```php
<?php

class x {} 

new x()->a();

// This is not possible: it's missing the parenthesis
//new x->a();

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected token "->" 

Parse error: syntax error, unexpected token "->" 
```

## After

```text

```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [syntax error, unexpected token "->"](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22-%3E%22.html)
