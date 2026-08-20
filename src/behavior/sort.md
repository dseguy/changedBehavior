# sort() Places Integers Before Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sort.html","headline":"sort() Places Integers Before Strings","name":"sort() Places Integers Before Strings","description":"sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sort.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"sort() Places Integers Before Strings"}]}}</script>

sort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

## PHP code

```php
<?php

$x = array('a',
           0,
           1,
           '0',
);
sort($x);
print_r($x);
?>
```

## Before

```text
Array
(
    [0] => a
    [1] => 0
    [2] => 0
    [3] => 1
)
```

## After

```text
Array
(
    [0] => 0
    [1] => 0
    [2] => 1
    [3] => a
)
```

## PHP version change

This behavior changed in 8.0.
