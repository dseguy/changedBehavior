# Negative Automatic Index From Empty Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_negative_id.html","headline":"Negative Automatic Index From Empty Array","name":"Negative Automatic Index From Empty Array","description":"When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_negative_id.html","inLanguage":"en","dateModified":"2025-10-07T20:20:18+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Negative Automatic Index From Empty Array"}]}}</script>

When starting from an empty array and assigning an initial negative integer index, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.3.

## PHP code

```php
<?php

$array = [];
$array[-2] = 'a';
$array[] = 'b';

print_r($array);

?>
```

## Before

```text
Array
(
    [-2] => a
    [0] => b
)
```

## After

```text
Array
(
    [-2] => a
    [-1] => b
)
```

## PHP version change

This behavior changed in 8.3.
