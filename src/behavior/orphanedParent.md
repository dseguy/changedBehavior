# Orphaned Parent

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/orphanedParent.html","headline":"Orphaned Parent","name":"Orphaned Parent","description":"Calling the parent class of a class without parent is not possible.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/orphanedParent.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Orphaned Parent"}]}}</script>

Calling the parent class of a class without parent is not possible. It used to be a deprecated error, where the code would keep on executing. In PHP 8.0, it stops the execution entirely.

## PHP code

```php
<?php

class X {
    function __construct() {
        parent::__construct();
    }
}

new X();

?>
```

## Before

```text
Deprecated: Cannot use "parent" when current class scope has no parent
```

## After

```text
PHP Fatal error:  Cannot use "parent" when current class scope has no parent
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## Error Messages

- [Cannot use "parent" when current class scope has no parent](https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22parent-%22-when-current-class-scope-has-no-parent.html)
