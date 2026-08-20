# mb_strrpos() Third Argument Is Not Encoding

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_strrpos.html","headline":"mb_strrpos() Third Argument Is Not Encoding","name":"mb_strrpos() Third Argument Is Not Encoding","description":"The third argument of mb_strrpos() was the offset where to start the search in the string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_strrpos.html","inLanguage":"en","dateModified":"2025-11-02T20:22:54+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"mb_strrpos() Third Argument Is Not Encoding"}]}}</script>

The third argument of mb_strrpos() was the offset where to start the search in the string. It was often 0, although the 4th argument was the encoding. Since the encoding was more often used, and the offset forgotten, mb_strrpos() used to recognize the encoding when it is used in position 3, and use it. In PHP 8.0, it is not the case anymore.

## PHP code

```php
<?php

// Valid in PHP 7.x
echo mb_strrpos('abc', 'a', 'utf8');

// Valid in PHP 8.+
echo mb_strrpos('abc', 'a', 0, 'utf8');
echo mb_strrpos('abc', 'a', encoding: 'utf8');

?>
```

## Before

```text
PHP Deprecated:  mb_strrpos(): Passing the encoding as third parameter is deprecated. Use an explicit zero offset 

Deprecated: mb_strrpos(): Passing the encoding as third parameter is deprecated. Use an explicit zero offset 
0
```

## After

```text
PHP Fatal error:  Uncaught TypeError: mb_strrpos(): Argument #3 ($offset) must be of type int, string given 

Fatal error: Uncaught TypeError: mb_strrpos(): Argument #3 ($offset) must be of type int, string given 
```

## PHP version change

This behavior changed in 8.0.
