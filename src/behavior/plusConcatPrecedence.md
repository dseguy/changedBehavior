# Plus And Concat Precedence

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/plusConcatPrecedence.html","headline":"Plus And Concat Precedence","name":"Plus And Concat Precedence","description":"`+` (and `-`) and `.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/plusConcatPrecedence.html","inLanguage":"en","dateModified":"2026-01-26T14:03:46+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Plus And Concat Precedence"}]}}</script>

`+` (and `-`) and `.` (dot) operators used to have the same priority. Thus, they used to be processed one after the other, from left to right. 



In PHP 8.0, the addition has now the highest precedence, and will happen before the concatenation.

## PHP code

```php
<?php

echo 35 + 7 . '.' . 0 + 5;

?>
```

## Before

```text
42.5
```

## After

```text
47
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## Analyzer

- [Php/ConcatAndAddition](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ConcatAndAddition.html)
