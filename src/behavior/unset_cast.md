# (unset) Was Removed

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unset_cast.html","headline":"(unset) Was Removed","name":"(unset) Was Removed","description":"(unset) operator is removed.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unset_cast.html","inLanguage":"en","dateModified":"2025-08-26T20:48:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"(unset) Was Removed"}]}}</script>

(unset) operator is removed. Use the unset() function for that feature.

## PHP code

```php
<?php

$a = 1;
(unset) $a;

var_dump($a);

?>
```

## Before

```text
PHP Deprecated:  The (unset) cast is deprecated

Deprecated: The (unset) cast is deprecated
int(1)
```

## After

```text
PHP Fatal error:  The (unset) cast is no longer supported

Fatal error: The (unset) cast is no longer supported
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## Error Messages

- [The (unset) cast is deprecated](https://php-errors.readthedocs.io/en/latest/messages/the-%28unset%29-cast-is-deprecated.html)

## Analyzer

- [Php/CastUnsetUsage](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/CastUnsetUsage.html)
