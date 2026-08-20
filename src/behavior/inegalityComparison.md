# Inegality Comparisons

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/inegalityComparison.html","headline":"Inegality Comparisons","name":"Inegality Comparisons","description":"The loose comparisons, including `=`, between integers and strings have changed in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/inegalityComparison.html","inLanguage":"en","dateModified":"2026-02-06T21:37:38+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Inegality Comparisons"}]}}</script>

The loose comparisons, including `=`, between integers and strings have changed in PHP 8.0. Until now, a string was strictly superior to any integer, but was superior or egal to any integer. 



Since PHP 8.0, strings are considered to be higher than integers. The comparison is consistent between the strict and inclusive comparison.



This also applies to float.

## PHP code

```php
<?php

var_dump(0 > 'a');
var_dump(0 >= 'a');

var_dump(0 < 'a');
var_dump(0 <= 'a');

?>
```

## Before

```text
bool(false)
bool(true)
bool(false)
bool(true)
```

## After

```text
bool(false)
bool(false)
bool(true)
bool(true)
```

## PHP version change

This behavior changed in 8.0.
