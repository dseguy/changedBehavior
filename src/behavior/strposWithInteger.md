# strpos() With Integer Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithInteger.html","headline":"strpos() With Integer Argument","name":"strpos() With Integer Argument","description":"strpos() used to accept integer arguments as second argument, `$needle`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithInteger.html","inLanguage":"en","dateModified":"2025-11-23T21:16:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() With Integer Argument"}]}}</script>

strpos() used to accept integer arguments as second argument, `$needle`. Then, PHP would turn the integer into the equivalent ASCII character, and look for that character.



Since PHP 8.0, it is not the case anymore. If the code requires such behavior, add a call to chr() or mb_chr() to convert the integer to an character, before searching for it.

## PHP code

```php
<?php

var_dump(@strpos('abc', 98));

?>
```

## Before

```text
int(1)
```

## After

```text
false
```

## PHP version change

This behavior changed in 8.0.

## Analyzer

- [Php/StrposWithIntegers](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/StrposWithIntegers.html)
