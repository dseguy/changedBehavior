# String To Integer Comparison

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/stringIntegerComparison.html","headline":"String To Integer Comparison","name":"String To Integer Comparison","description":"The comparison between a string and an integer has changed.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/stringIntegerComparison.html","inLanguage":"en","dateModified":"2026-02-07T20:32:19+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"String To Integer Comparison"}]}}</script>

The comparison between a string and an integer has changed. In particular, PHP 7 used to convert both operands to integer before comparison, leading to 0 and any string being equal. 



In PHP 8.0 and more recent, this doesn't happen and strings are now different from integers. 



Also, strings used to be smaller than 0, but they are now bigger.

## PHP code

```php
<?php

var_dump(0 == 'a');

?>
```

## Before

```text
bool(true)
```

## After

```text
bool(false)
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [String to Number Comparison](https://www.php.net/manual/en/migration80.incompatible.php#migration80.incompatible.core.string-number-comparision)
