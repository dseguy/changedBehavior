# Integer Non-silent Conversion

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/intSilentConversion.html","headline":"Integer Non-silent Conversion","name":"Integer Non-silent Conversion","description":"When a string is converted into a integer, with problems, the notice was upgraded to a Warning.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/intSilentConversion.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Integer Non-silent Conversion"}]}}</script>

When a string is converted into a integer, with problems, the notice was upgraded to a Warning. This raised level may end up filling logs.



This applies to all mathematical operations, such as multiplication, divisions, modulo, exponent, etc.

## PHP code

```php
<?php

print $a = 1 + '3a';

?>
```

## Before

```text
PHP Notice:  A non well formed numeric value encountered 

Notice: A non well formed numeric value encountered 
4
```

## After

```text
PHP Warning:  A non-numeric value encountered 

Warning: A non-numeric value encountered 
4
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [A non-numeric value encountered](https://php-errors.readthedocs.io/en/latest/messages/a-non-numeric-value-encountered.html)
