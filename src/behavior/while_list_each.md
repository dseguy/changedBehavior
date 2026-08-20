# each() Is No More

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/while_list_each.html","headline":"each() Is No More","name":"each() Is No More","description":"The `each` function is the base for the `while` loop that traverse arrays.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/while_list_each.html","inLanguage":"en","dateModified":"2026-02-06T21:27:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"each() Is No More"}]}}</script>

The `each` function is the base for the `while` loop that traverse arrays. The modern version of this loop is `foreach`, which does not rely on `each`, and improves the loop in speed and reliability. Hence, `each` was deprecated in PHP 7.4, and removed in 8.0.

## PHP code

```php
<?php

while(list($k, $v) = each($array)) {
    print $k . ' => '. $v.PHP_EOL;
}

?>
```

## Before

```text
PHP Deprecated:  The each() function is deprecated. This message will be suppressed on further calls

Deprecated: The each() function is deprecated. This message will be suppressed on further calls
PHP Warning:  Variable passed to each() is not an array or object

Warning: Variable passed to each() is not an array or object
```

## After

```text
PHP Fatal error:  Uncaught Error: Call to undefined function each()

Fatal error: Uncaught Error: Call to undefined function each()
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## Error Messages

- [Call to undefined function each()](https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-each%28%29.html)
