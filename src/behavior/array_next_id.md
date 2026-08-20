# Automatic Index In Non Empty Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_next_id.html","headline":"Automatic Index In Non Empty Array","name":"Automatic Index In Non Empty Array","description":"When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_next_id.html","inLanguage":"en","dateModified":"2025-10-07T20:20:31+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Automatic Index In Non Empty Array"}]}}</script>

When starting from an array whose maximum key is integer and negative, PHP used to continue assigning indices with 0, instead of the following negative number. It is fixed in PHP 8.0.

## PHP code

```php
<?php

$array = [
    -10 => 'a',
];
$array[] = 'b';

print_r($array);

?>
```

## Before

```text
Array
(
    [-10] => a
    [0] => b
)
```

## After

```text
Array
(
    [-10] => a
    [-9] => b
)
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [Using negative indices with PHP arrays](https://www.strangebuzz.com/en/snippets/using-negative-indices-with-php-arrays)
