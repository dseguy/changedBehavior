# No Dynamic Global Variables

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/globalDynamicVariable.html","headline":"No Dynamic Global Variables","name":"No Dynamic Global Variables","description":"In PHP 5.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/globalDynamicVariable.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No Dynamic Global Variables"}]}}</script>

In PHP 5.6, dynamic global variables were possible. This means that a variable, whose name is stored in another variable, could be dynamically used with the `global` keyword.



These notations are now dropped, except for with the `$\{   \}` operator.

## PHP code

```php
<?php

// Valid in all PHP versions
global $normalGlobal;

// Forbidden in PHP 7
global $$variable->global ;

// Tolerated in PHP 7
global $\{$variable->global\}; 

?>
```

## Before

```text
1
```

## After

```text
PHP Parse error:  syntax error, unexpected token "->", expecting "," or ";" 

Parse error: syntax error, unexpected token "->", expecting "," or ";" 
```

## PHP version change

This behavior changed in 5.6.

## Error Messages

- [syntax error, unexpected token "->", expecting "," or ";"](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22-%3E%22%2C-expecting-%22%2C%22-or-%22%3B%22.html)
