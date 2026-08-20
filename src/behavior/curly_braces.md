# Array Syntax With Curly Braces Are No More

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curly_braces.html","headline":"Array Syntax With Curly Braces Are No More","name":"Array Syntax With Curly Braces Are No More","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curly_braces.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Array Syntax With Curly Braces Are No More"}]}}</script>

Until PHP 8.4, using the array syntax with curly braces yielded a Fatal error, and a nice error message. 



After that, it is downgraded to a syntax error.

## PHP code

```php
<?php

$x{3} = 2;

print_r($x);

?>
```

## Before

```text
PHP Fatal error:  Array and string offset access syntax with curly braces is no longer supported

Fatal error: Array and string offset access syntax with curly braces is no longer supported
```

## After

```text
PHP Parse error:  syntax error, unexpected token "\{" 

Parse error: syntax error, unexpected token "\{" 
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Array and string offset access syntax with curly braces is deprecated](https://php-errors.readthedocs.io/en/latest/messages/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html)
- [syntax error, unexpected token "{"](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7B%22.html)
