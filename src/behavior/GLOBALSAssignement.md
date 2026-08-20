# $GLOBALS Assignement

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSAssignement.html","headline":"$GLOBALS Assignement","name":"$GLOBALS Assignement","description":"It is not possible to assign the `$GLOBALS` variable anymore.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSAssignement.html","inLanguage":"en","dateModified":"2026-01-20T06:22:55+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"$GLOBALS Assignement"}]}}</script>

It is not possible to assign the `$GLOBALS` variable anymore. The individual values may still be assigned directly. 

## PHP code

```php
<?php

$GLOBALS['a']  = 1;

$b = &$GLOBALS;
$b = array();

print_r($GLOBALS);

?>
```

## Before

```text
Array
(
)
```

## After

```text
PHP Fatal error:  Cannot acquire reference to $GLOBALS
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Cannot acquire reference to $GLOBALS](https://php-errors.readthedocs.io/en/latest/messages/cannot-acquire-reference-to-%24globals.html)

## Analyzer

- [Php/RestrictGlobalUsage](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/RestrictGlobalUsage.html)
