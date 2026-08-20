# strpos() With Out-Of-Range Offset Is A Fatal Error

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strpos-and-offset.html","headline":"strpos() With Out-Of-Range Offset Is A Fatal Error","name":"strpos() With Out-Of-Range Offset Is A Fatal Error","description":"Requesting a large offset, beyond the size of the searched string, leads to a Fatal error in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strpos-and-offset.html","inLanguage":"en","dateModified":"2026-02-07T20:32:07+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() With Out-Of-Range Offset Is A Fatal Error"}]}}</script>

Requesting a large offset, beyond the size of the searched string, leads to a Fatal error in PHP 8.0 and more recent. 



Until then, it was a warning.



This error message is shared by several PHP native and extension functions, namely `mbstring` and `iconv`: `strpos()`, `strrpos()`, `stripos()`, `strripos()`, `mb_strpos()`, `mb_strrpos()`, `mb_stripos()`, `mb_strripos()`, `iconv_strpos` and `iconv_strrpos`. 



## PHP code

```php
<?php

strpos('abc', 'b', 6);

?>
```

## Before

```text
PHP Warning:  strpos(): Offset not contained in string -

Warning: strpos(): Offset not contained in string -
```

## After

```text
PHP Fatal error:  Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) -

Fatal error: Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) -
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [%s(): Argument #%d ($%s) must be contained in argument #%d ($%s)](https://php-errors.readthedocs.io/en/latest/messages/must-be-contained-in-argument-%231-%28%24haystack%29.html)
- [Offset not contained in string.](https://php-errors.readthedocs.io/en/latest/messages/offset-not-contained-in-string..html)
