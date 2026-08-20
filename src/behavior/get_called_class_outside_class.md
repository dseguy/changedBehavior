# get_called_class() Cannot Be Called Outside A Class

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_called_class_outside_class.html","headline":"get_called_class() Cannot Be Called Outside A Class","name":"get_called_class() Cannot Be Called Outside A Class","description":"get_called_class() generated a warning when called outside a class or an enumeration.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_called_class_outside_class.html","inLanguage":"en","dateModified":"2026-08-20T16:00:34+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"get_called_class() Cannot Be Called Outside A Class"}]}}</script>

get_called_class() generated a warning when called outside a class or an enumeration. Since PHP 8.0, it is a fatal error.

## PHP code

```php
<?php

var_dump(get_called_class());

?>
```

## Before

```text
PHP Warning:  get_called_class() called from outside a class

Warning: get_called_class() called from outside a class
bool(false)
```

## After

```text
PHP Fatal error:  Uncaught Error: get_called_class() must be called from within a class

Fatal error: Uncaught Error: get_called_class() must be called from within a class
```

## PHP version change

This behavior was deprecated in 7.0.

This behavior changed in 8.0.

## Error Messages

- [get_called_class() called from outside a class](https://php-errors.readthedocs.io/en/latest/messages/get_called_class%28%29-must-be-called-from-within-a-class.html)
