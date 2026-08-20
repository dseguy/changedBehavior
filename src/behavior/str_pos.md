# str_pos() Requires Only Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_pos.html","headline":"str_pos() Requires Only Strings","name":"str_pos() Requires Only Strings","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_pos.html","inLanguage":"en","dateModified":"2025-09-17T16:54:39+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"str_pos() Requires Only Strings"}]}}</script>

Until PHP 8.0, str_pos() accepted integers as second argument, and would convert them into their equivalent ASCII char. This was a hidden feature of PHP.



Since PHP 8.0, the integer is converted to string as is, and used for the search.

## PHP code

```php
<?php

var_dump(strpos('abc ', 32));

?>
```

## Before

```text
PHP Deprecated:  strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior

Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior
int(3)
```

## After

```text
bool(false)
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior](https://php-errors.readthedocs.io/en/latest/messages/non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr%28%29-call-to-preserve-the-current-behavior.html)

## Analyzer

- [Php/StrposWithIntegers](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/StrposWithIntegers.html)
