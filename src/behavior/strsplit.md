# strsplit() With Empty String

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strsplit.html","headline":"strsplit() With Empty String","name":"strsplit() With Empty String","description":"strsplit() splits a string into smaller strings of the same size.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strsplit.html","inLanguage":"en","dateModified":"2025-09-17T17:00:55+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strsplit() With Empty String"}]}}</script>

strsplit() splits a string into smaller strings of the same size. Until PHP 8.2, it used to return an array with an empty string when splitting an empty string. Since then, it returns an empty array.



This has impact on the code after, in processing or testing the result of the split. 

## PHP code

```php
<?php
var_dump(str_split('', 3));
?>
```

## Before

```text
Array
(
    [0] => 
)
```

## After

```text
Array
(
)
```

## PHP version change

This behavior changed in 8.2.
