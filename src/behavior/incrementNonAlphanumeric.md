# Increment Non-alphanumeric

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/incrementNonAlphanumeric.html","headline":"Increment Non-alphanumeric","name":"Increment Non-alphanumeric","description":"PHP has a string increment feature, where a string may be incremented by one, to its next ASCII character.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/incrementNonAlphanumeric.html","inLanguage":"en","dateModified":"2025-11-02T20:24:55+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Increment Non-alphanumeric"}]}}</script>

PHP has a string increment feature, where a string may be incremented by one, to its next ASCII character.



This does not apply to non-alphanumeric characters, such as `space`, `semi-colon`, etc. Until PHP 8.4, it was silent, and now, it is a warning.

## PHP code

```php
<?php

$a = ';';
++$a;

echo $a;

?>
```

## Before

```text
PHP Deprecated:  Increment on non-alphanumeric string is deprecated 

Deprecated: Increment on non-alphanumeric string is deprecated 
;
```

## After

```text
PHP Deprecated:  Increment on non-numeric string is deprecated, use str_increment() instead 

Deprecated: Increment on non-numeric string is deprecated, use str_increment() instead 
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Increment on non-numeric string is deprecated, use str_increment() instead](https://php-errors.readthedocs.io/en/latest/messages/increment-on-non-alphanumeric-string-is-deprecated.html)
