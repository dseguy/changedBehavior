# Copy Of $GLOBALS

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSCopy.html","headline":"Copy Of $GLOBALS","name":"Copy Of $GLOBALS","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSCopy.html","inLanguage":"en","dateModified":"2026-01-20T06:36:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Copy Of $GLOBALS"}]}}</script>

Until PHP 8.1, copying $GLOBALS into another variable was made by reference: modifying the values in the copy was also modifying the original. Since PHP 8.1, the copy is a copy by value: this means that changing something in the copy will not be changed in the original `$GLOBALS` variable.

## PHP code

```php
<?php
$a = 1;

$globals = $GLOBALS; // Ostensibly by-value copy
$globals['a'] = 2;
var_dump($a); // int(2)
?>
```

## Before

```text
int(2)
```

## After

```text
int(1)
```

## PHP version change

This behavior changed in 8.1.

## Analyzer

- [Php/GlobalCopy](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/GlobalCopy.html)
