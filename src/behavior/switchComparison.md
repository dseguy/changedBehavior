# switch() Changed Comparison Style

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/switchComparison.html","headline":"switch() Changed Comparison Style","name":"switch() Changed Comparison Style","description":"The switch command uses a relaxed comparison style.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/switchComparison.html","inLanguage":"en","dateModified":"2026-02-06T21:28:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"switch() Changed Comparison Style"}]}}</script>

The switch command uses a relaxed comparison style. Hence, the associated cases changed in PHP 8.0, whenever they use the special values such a 0, empty string '' or null.

## PHP code

```php
<?php

$a = 0;
switch ($a) {
    case 'a': 
        print 'a'.PHP_EOL;
        break;

    case 0: 
        print 'Null'.PHP_EOL;
        break;
        
    default:
        print 'Default'.PHP_EOL;
}

?>
```

## Before

```text
a
```

## After

```text
Null
```

## PHP version change

This behavior changed in 8.0.

## Analyzer

- [Php/StringIntComparison](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/StringIntComparison.html)
