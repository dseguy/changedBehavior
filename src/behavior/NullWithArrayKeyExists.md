# Null With array_key_exists()

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullWithArrayKeyExists.html","headline":"Null With array_key_exists()","name":"Null With array_key_exists()","description":"`null` is not accepted anymore as the first argument of the PHP native function `array_key_exists()`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullWithArrayKeyExists.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Null With array_key_exists()"}]}}</script>

`null` is not accepted anymore as the first argument of the PHP native function `array_key_exists()`. Since PHP 8.5, `null` is not accepted anymore as a key in an array, so it is also not accepted with the function `array_key_exists()`, which checks if a key exists in an array.

## PHP code

```php
<?php

$array = [null => 1]; // silent error 
var_dump(array_key_exists(null, $array)); 

?>
```

## Before

```text
bool(true)
```

## After

```text
PHP Deprecated:  Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead

Deprecated: Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead
bool(true)
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead](https://php-errors.readthedocs.io/en/latest/messages/using-null-as-the-key-parameter-for-array_key_exists%28%29-is-deprecated%2C-use-an-empty-string-instead.html)
