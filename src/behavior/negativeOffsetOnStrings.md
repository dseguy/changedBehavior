# Negative Offset With Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/negativeOffsetOnStrings.html","headline":"Negative Offset With Strings","name":"Negative Offset With Strings","description":"Negative offsets on strings were introduced in PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/negativeOffsetOnStrings.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Negative Offset With Strings"}]}}</script>

Negative offsets on strings were introduced in PHP 7.1. They allow accessing individual characters, starting from the end of the string, rather than from the beginning.

## PHP code

```php
<?php

$string = 'abc';

echo $string[-1]; // c
echo $string[1]; // a

?>
```

## Before

```text
PHP Notice:  Uninitialized string offset: -1

Notice: Uninitialized string offset: -1
b
```

## After

```text
cb
```

## PHP version change

This behavior changed in 7.1.
