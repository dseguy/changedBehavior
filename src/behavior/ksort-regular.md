# ksort() now uses regular comparison

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ksort-regular.html","headline":"ksort() now uses regular comparison","name":"ksort() now uses regular comparison","description":"ksort() used a different sorting method to sort the keys than to sort the values.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ksort-regular.html","inLanguage":"en","dateModified":"2026-08-20T16:00:01+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ksort() now uses regular comparison"}]}}</script>

ksort() used a different sorting method to sort the keys than to sort the values. Since PHP 8.2, it uses the same method than sort() does on values. This means some values may have a different position.



This applies to krsort() too. It may apply to uksort(), depending on the code of the custom comparison function.

## PHP code

```php
<?php

$array = [ 0, '-f' => 1, 'f' => 2];

ksort($array);

print_r($array);

?>
```

## Before

```text
Array
(
    [0] => 0
    [-f] => 1
    [f] => 2
)
```

## After

```text
Array
(
    [-f] => 1
    [0] => 0
    [f] => 2
)
```

## PHP version change

This behavior changed in 8.2.
