# No Reference To $GLOBALS Variable

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NoReferenceToGLOBALS.html","headline":"No Reference To $GLOBALS Variable","name":"No Reference To $GLOBALS Variable","description":"Since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NoReferenceToGLOBALS.html","inLanguage":"en","dateModified":"2026-01-26T13:58:32+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No Reference To $GLOBALS Variable"}]}}</script>

Since PHP 8.2, it is not possible anymore to create a reference to the $GLOBALS variable. It prevents any unexpected updates to this array.



It is still possible to make a reference to any of the element of that array, individually.



## PHP code

```php
<?php

$b = &$GLOBALS;

print_r($b);

?>
```

## Before

```text
Array
(
    [_GET] => Array
        (
        )

    [_POST] => Array
        (
        )

    [_COOKIE] => Array
        (
        )
// .... and more

?>
```

## After

```text
PHP Fatal error:  Cannot acquire reference to $GLOBALS
```

## PHP version change

This behavior changed in 8.2.

## Error Messages

- [Cannot acquire reference to $GLOBALS](https://php-errors.readthedocs.io/en/latest/messages/cannot-acquire-reference-to-%24globals.html)
