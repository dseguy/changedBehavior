# spaceship Operator Results

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/spaceship.html","headline":"spaceship Operator Results","name":"spaceship Operator Results","description":"With the change of comparison between integers and strings, the spaceship was also impacted.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/spaceship.html","inLanguage":"en","dateModified":"2026-01-20T06:58:02+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"spaceship Operator Results"}]}}</script>

With the change of comparison between integers and strings, the spaceship was also impacted. Some spaceship comparisons did change, and are not returning the same results than before. 

## PHP code

```php
<?php

var_dump( 0 <=> 'foo');
var_dump( 0 <=> '');

?>
```

## Before

```text
int(0)
int(0)
```

## After

```text
int(-1)
int(1)
```

## PHP version change

This behavior changed in 8.0.
