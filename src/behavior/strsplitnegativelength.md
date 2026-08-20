# str_split() Throws ValueError With Negative Lengths

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strsplitnegativelength.html","headline":"str_split() Throws ValueError With Negative Lengths","name":"str_split() Throws ValueError With Negative Lengths","description":"`str_split()` used to emit a warning and return `false`, when provided with `$length`, the second argument, as an integer less then 1.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strsplitnegativelength.html","inLanguage":"en","dateModified":"2026-02-06T21:34:15+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"str_split() Throws ValueError With Negative Lengths"}]}}</script>

`str_split()` used to emit a warning and return `false`, when provided with `$length`, the second argument, as an integer less then 1. In PHP 8.0, it now throws a `ValueError`.

## PHP code

```php
<?php
  str_split('abc', 0);
?>
```

## Before

```text
Warning: str_split(): The length of each segment must be greater than zero
```

## After

```text
Fatal error: Uncaught ValueError: str_split(): Argument #2 ($length) must be greater than 0
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Argument #2 ($length) must be greater than 0](https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-must-be-greater-than-or-equal-to-0.html)
