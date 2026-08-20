# $php_errormsg has been removed

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/php_errormsg.html","headline":"$php_errormsg has been removed","name":"$php_errormsg has been removed","description":"$php_errormsg used to hold the message of the last error that PHP emitted.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/php_errormsg.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"$php_errormsg has been removed"}]}}</script>

$php_errormsg used to hold the message of the last error that PHP emitted. This is a feature handled by the error_get_last() function. 



`$php_errormsg` was only set if the `tracks_error` directive was activated (by default, it was not).

## PHP code

```php
<?php

ini_set('track_errors', 1);

echo $a;

echo $php_errormsg;

?>
```

## Before

```text
PHP Notice:  Undefined variable: a 

Notice: Undefined variable: a 
Undefined variable: a
```

## After

```text
PHP Warning:  Undefined variable $a 

Warning: Undefined variable $a 
PHP Warning:  Undefined variable $php_errormsg 

Warning: Undefined variable $php_errormsg 
```

## PHP version change

This behavior was deprecated in 7.2.

This behavior changed in 8.0.

## See Also

- [$php_errormsg](https://www.php.net/manual/en/reserved.variables.phperrormsg.php)

## Error Messages

- [Undefined variable](https://php-errors.readthedocs.io/en/latest/messages/undefined-variable.html)
