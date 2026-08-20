# strpos() Emits TypeError

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposTypeError.html","headline":"strpos() Emits TypeError","name":"strpos() Emits TypeError","description":"strpos() and stripos() emit a `TypeError` when the offset is of the wrong type.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposTypeError.html","inLanguage":"en","dateModified":"2026-02-07T20:31:55+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() Emits TypeError"}]}}</script>

strpos() and stripos() emit a `TypeError` when the offset is of the wrong type. In PHP 7.4, it emitted a warning.

## PHP code

```php
<?php
strpos('a', 'abc', null);
?>
```

## Before

```text
PHP Warning:  strpos() expects parameter 3 to be int, string given
```

## After

```text
PHP Fatal error:  Uncaught TypeError: strpos(): Argument #3 ($offset) must be of type int, string given
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Argument #3 ($offset) must be of type int, string given](https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-%25s%2C-%25s-given.html)
