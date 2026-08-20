# strpos() With Null Haystack

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithNullHaystack.html","headline":"strpos() With Null Haystack","name":"strpos() With Null Haystack","description":"PHP accepted `null` as first parameter `$string` of strpos().","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithNullHaystack.html","inLanguage":"en","dateModified":"2026-02-07T20:31:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() With Null Haystack"}]}}</script>

PHP accepted `null` as first parameter `$string` of strpos(). Then, it cast the null to empty string, and returned immediately `false`, as nothing was found in such  string.



Since PHP 8.2, this is a deprecated behavior, with a warning message. It will be removed in PHP 9.

## PHP code

```php
<?php

var_dump(strpos(null, '1'));

?>
```

## Before

```text
false
```

## After

```text
strpos(): Passing null to parameter #1 ($haystack) of type string is deprecated
```

## PHP version change

This behavior was deprecated in 8.2.

This behavior changed in 9.0.

## Error Messages

- [Passing null to parameter #1 ($haystack) of type string is deprecated](https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-passing-null-to-parameter-%23%25.html)
