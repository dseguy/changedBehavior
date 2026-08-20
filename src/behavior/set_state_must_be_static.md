# __set_state() Method Must Be Static

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/set_state_must_be_static.html","headline":"__set_state() Method Must Be Static","name":"__set_state() Method Must Be Static","description":"Starting with PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/set_state_must_be_static.html","inLanguage":"en","dateModified":"2026-02-25T23:41:40+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"__set_state() Method Must Be Static"}]}}</script>

Starting with PHP 8.0, the magic method __set_state() must be static when declared in a class.

## PHP code

```php
<?php

class X {
    function __set_state() {}
}

?>
```

## Before

```text

```

## After

```text
PHP Fatal error:  Method x::__set_state() must be static

Fatal error: Method x::__set_state() must be static
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [__set_state()](https://www.php.net/manual/en/language.oop5.magic.php#object.set-state)

## Error Messages

- [Method x::__set_state() must be static](https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-must-be-static.html)
