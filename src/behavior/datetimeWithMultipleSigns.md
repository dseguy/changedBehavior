# datetime With Multiple Signs

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/datetimeWithMultipleSigns.html","headline":"datetime With Multiple Signs","name":"datetime With Multiple Signs","description":"There can be only one sign character, when instantiating a DateTime object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/datetimeWithMultipleSigns.html","inLanguage":"en","dateModified":"2026-08-12T15:26:54+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"datetime With Multiple Signs"}]}}</script>

There can be only one sign character, when instantiating a DateTime object. 



Until PHP 8.2, it was possible, though confusing, to use multiple sign `+` and `-`. This is considered a bad practice.



## PHP code

```php
<?php
$time = new \DateTimeImmutable("-+-1 year");

echo $time->format('Y/m/d H:i:s'), "\n";
?>
```

## Before

```text
2024/10/18 10:15:30
```

## After

```text
2022/10/18 10:15:30
```

## PHP version change

This behavior changed in 8.2.
