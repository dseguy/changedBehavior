# max() On String And Integer

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/maxOnStringAndInt.html","headline":"max() On String And Integer","name":"max() On String And Integer","description":"In PHP 8, the rules of comparison between integers and strings have changed.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/maxOnStringAndInt.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"max() On String And Integer"}]}}</script>

In PHP 8, the rules of comparison between integers and strings have changed. Hence, max() may return a different value on PHP 7 and PHP 8.

## PHP code

```php
<?php

var_dump( max(['', 0]));

?>
```

## Before

```text
string(0) 
```

## After

```text
int(0)
```

## PHP version change

This behavior changed in 8.0.
