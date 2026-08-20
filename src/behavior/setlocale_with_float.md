# setlocale() Does Not Affect Echo Anymore

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/setlocale_with_float.html","headline":"setlocale() Does Not Affect Echo Anymore","name":"setlocale() Does Not Affect Echo Anymore","description":"setlocale() used to impact several functions, including `echo`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/setlocale_with_float.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"setlocale() Does Not Affect Echo Anymore"}]}}</script>

setlocale() used to impact several functions, including `echo`. With the French or German (or other) conventions, the decimal separator is a comma, and PHP makes the conversion at `echo` time.



This is not the case anymore in PHP 8.0: anytime the float is converted to a string, the locale formatting is not applied anymore.



It is recommended to make this conversion explicit by using `printf()`, `number_format()` or a custom formatter function.

## PHP code

```php
<?php

setlocale(LC_ALL, 'fr_FR.UTF-8');

echo 1003.14;

?>
```

## Before

```text
1003,14
```

## After

```text
1003.14
```

## PHP version change

This behavior changed in 8.0.
