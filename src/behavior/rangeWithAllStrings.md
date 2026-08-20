# range() Lists Everything Between Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeWithAllStrings.html","headline":"range() Lists Everything Between Strings","name":"range() Lists Everything Between Strings","description":"range() used to cast the arguments to integers.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeWithAllStrings.html","inLanguage":"en","dateModified":"2026-01-27T07:59:07+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"range() Lists Everything Between Strings"}]}}</script>

range() used to cast the arguments to integers. In PHP 8.3, strings are used as is, and range() returns the list of chars between the ASCII codes of those strings. 

## PHP code

```php
<?php

print_r(range('0', 'A')); 

?>
```

## Before

```text
Array
(
    [0] => 0
)
```

## After

```text
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
    [5] => 5
    [6] => 6
    [7] => 7
    [8] => 8
    [9] => 9
    [10] => :
    [11] => ;
    [12] => <
    [13] => =
    [14] => >
    [15] => ?
    [16] => @
    [17] => A
)
```

## PHP version change

This behavior changed in 8.3.
