# Bitshift And Concat Precedence

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/bitshiftConcatPrecedence.html","headline":"Bitshift And Concat Precedence","name":"Bitshift And Concat Precedence","description":"<< and >> and.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/bitshiftConcatPrecedence.html","inLanguage":"en","dateModified":"2026-08-20T19:29:27+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Bitshift And Concat Precedence"}]}}</script>

<< and >> and ., the dot, operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the bitshift has now the highest precedence, and will happen before the concatenation.

## PHP code

```php
<?php

echo 35 << 1 . '.' . 0 + 5;

?>
```

## Before

```text
70.5
```

## After

```text
2240
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## Analyzer

- [Php/ConcatAndAddition](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ConcatAndAddition.html)
