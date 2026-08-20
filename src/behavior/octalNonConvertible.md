# PHP Warns When Finding Unconvertible Characters

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/octalNonConvertible.html","headline":"PHP Warns When Finding Unconvertible Characters","name":"PHP Warns When Finding Unconvertible Characters","description":"PHP emits a deprecation when reaching a character that cannot be converted.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/octalNonConvertible.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"PHP Warns When Finding Unconvertible Characters"}]}}</script>

PHP emits a deprecation when reaching a character that cannot be converted. For example, when converting from octal to decimal, a `8`, a `9`, or a letter cannot be converted to a number. 



Until PHP 7.4, PHP would stop at that character, then return the converted part. Later, it also emits a warning.

## PHP code

```php
<?php

// 9 is not an octal number
echo octdec(342391);

?>
```

## Before

```text
14489
```

## After

```text
PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored

Deprecated: Invalid characters passed for attempted conversion, these have been ignored
14489
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Invalid characters passed for attempted conversion, these have been ignored](https://php-errors.readthedocs.io/en/latest/messages/invalid-characters-passed-for-attempted-conversion%2C-these-have-been-ignored.html)
