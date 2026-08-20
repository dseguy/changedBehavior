# ksort() Now Places Integers Before Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ksort.html","headline":"ksort() Now Places Integers Before Strings","name":"ksort() Now Places Integers Before Strings","description":"ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ksort.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ksort() Now Places Integers Before Strings"}]}}</script>

ksort() used the PHP 7 way to compare values: then, strings would rank below integers, in particular below 0. 



In PHP 8.2, strings are now ranking above integers, and are moved to the end of the sorted array. This is related to the change of rules in comparisons.

## PHP code

```php
<?php

$x = array('a' => 1, 
           0 => 2, 
           1 => 3, 
           '0' => 4,
);
ksort($x);
print_r($x);
?>
```

## Before

```text
Array
(
    [a] => 1
    [0] => 4
    [1] => 3
)
```

## After

```text
Array
(
    [0] => 4
    [1] => 3
    [a] => 1
)
```

## PHP version change

This behavior changed in 8.2.
