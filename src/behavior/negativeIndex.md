# Negative Index On Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/negativeIndex.html","headline":"Negative Index On Strings","name":"Negative Index On Strings","description":"Negative index reaches an offset in a string, starting from the last elements in that string, instead of starting from position 0.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/negativeIndex.html","inLanguage":"en","dateModified":"2026-01-26T14:05:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Negative Index On Strings"}]}}</script>

Negative index reaches an offset in a string, starting from the last elements in that string, instead of starting from position 0.



This feature is also supported by substr(), and was introduced in PHP 7.1.



## PHP code

```php
<?php

$string = 'abc';

var_dump($string[-1]);

?>
```

## Before

```text
PHP Notice:  Uninitialized string offset: -1

Notice: Uninitialized string offset: -1
string(0) "" 
```

## After

```text
string(1) "c" 
```

## PHP version change

This behavior changed in 7.1.

## Error Messages

- [Uninitialized string offset: -1](https://php-errors.readthedocs.io/en/latest/messages/uninitialized-string-offset.html)

## Analyzer

- [Structures/NegativeOffsetOnString](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/NegativeOffsetOnString.html)
