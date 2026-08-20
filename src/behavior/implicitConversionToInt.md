# Implicit Array Key Conversion

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitConversionToInt.html","headline":"Implicit Array Key Conversion","name":"Implicit Array Key Conversion","description":"Array keys accept only string and integer types.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitConversionToInt.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Implicit Array Key Conversion"}]}}</script>

Array keys accept only string and integer types. When providing a float, PHP used to convert it to an int. It still does, in PHP 8.1, though it now emits a deprecation warning.

## PHP code

```php
<?php

$a = [];
$a[15.5] = 2; // deprecated, as key value loses the 0.5 component
$a[15.0] = 3; // ok, as 15.0 == 15

print $a[15];

?>
```

## Before

```text
2
```

## After

```text
PHP Deprecated:  Implicit conversion from float 15.5 to int loses precision 

Deprecated: Implicit conversion from float 15.5 to int loses precision 
3
```

## PHP version change

This behavior was deprecated in 8.1.

This behavior changed in 9.0.

## Error Messages

- [Implicit conversion from float 15.5 to int loses precision](https://php-errors.readthedocs.io/en/latest/messages/implicit-conversion-from-float-string-%22%25s%22-to-int-loses.html)
