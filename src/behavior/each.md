# each() Has Been Removed

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/each.html","headline":"each() Has Been Removed","name":"each() Has Been Removed","description":"The `each()` function has been deprecated in PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/each.html","inLanguage":"en","dateModified":"2026-02-01T21:03:29+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"each() Has Been Removed"}]}}</script>

The `each()` function has been deprecated in PHP 7.x, and removed in PHP 8.0. Use foreach() instead.

## PHP code

```php
<?php

$array = ['a' => 1];
list($a, $b) = each($array);

echo $a; 
echo $b;

?>
```

## Before

```text
PHP Deprecated:  The each() function is deprecated. This message will be suppressed on further calls

Deprecated: The each() function is deprecated. This message will be suppressed on further calls
a1
```

## After

```text
PHP Fatal error:  Uncaught Error: Call to undefined function each()

Fatal error: Uncaught Error: Call to undefined function each()
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [The each() function is deprecated. This message will be suppressed on further calls](https://php-errors.readthedocs.io/en/latest/messages/the-each%28%29-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html)

## Analyzer

- [Php/Php80RemovedFunctions](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/Php80RemovedFunctions.html)
