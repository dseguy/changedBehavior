# strpos() Does Not Accept False

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithFalse.html","headline":"strpos() Does Not Accept False","name":"strpos() Does Not Accept False","description":"PHP used to type cast `false` to 0 then to a string, when it is used as second argument to strpos().","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithFalse.html","inLanguage":"en","dateModified":"2025-11-23T21:18:00+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() Does Not Accept False"}]}}</script>

PHP used to type cast `false` to 0 then to a string, when it is used as second argument to strpos().

## PHP code

```php
<?php

var_dump(strpos('abc', false));
var_dump(strpos('a'.chr(0), false));
?>
```

## Before

```text
PHP Deprecated:  strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior

Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior
bool(false)
int(1);
```

## After

```text
int(0)
int(0)
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## See Also

- [strpos](https://www.php.net/manual/en/function.strpos.php)

## Error Messages

- [Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior ](https://php-errors.readthedocs.io/en/latest/messages/non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr%28%29-call-to-preserve-the-current-behavior.html)
