# strpos() Emits ValueError

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposValueError.html","headline":"strpos() Emits ValueError","name":"strpos() Emits ValueError","description":"strpos() and stripos() emits a ValueError when the offset is out of range.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposValueError.html","inLanguage":"en","dateModified":"2026-02-07T20:31:26+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() Emits ValueError"}]}}</script>

strpos() and stripos() emits a ValueError when the offset is out of range. In PHP 7.4, it emitted a warning.

## PHP code

```php
<?php
  strpos('a', 'abc', 17);
?>
```

## Before

```text
PHP Warning:  strpos(): Offset not contained in string

Warning: strpos(): Offset not contained in string
bool(false)
```

## After

```text
PHP Fatal error:  Uncaught ValueError: strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack) 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Offset not contained in string](https://php-errors.readthedocs.io/en/latest/messages/offset-not-contained-in-string..html)
