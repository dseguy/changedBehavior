# Appending To $GLOBALS

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSAppend.html","headline":"Appending To $GLOBALS","name":"Appending To $GLOBALS","description":"$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSAppend.html","inLanguage":"en","dateModified":"2026-08-12T15:31:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Appending To $GLOBALS"}]}}</script>

$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name. Appending to it with the empty-bracket operator, which would normally pick the next integer key, has no matching global variable to bind to. Before PHP 8.1, this meaningless operation was silently tolerated, and created a global variable literally named "0". As of PHP 8.1, $GLOBALS is treated more strictly by the compiler, and this and several other previously-tolerated usages now raise a compile-time error instead.

## PHP code

```php
<?php

$GLOBALS[] = 'value';

?>
```

## Before

```text

```

## After

```text
PHP Fatal error:  Cannot append to $GLOBALS
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Cannot append to $GLOBALS](https://php-errors.readthedocs.io/en/latest/messages/cannot-append-to-%24globals.html)
