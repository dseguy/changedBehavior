# strpos() Does Not Accept Null As Second Parameter

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithNull.html","headline":"strpos() Does Not Accept Null As Second Parameter","name":"strpos() Does Not Accept Null As Second Parameter","description":"strpos() and stripos() used to accept NULL as second argument.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strposWithNull.html","inLanguage":"en","dateModified":"2025-11-23T21:16:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strpos() Does Not Accept Null As Second Parameter"}]}}</script>

strpos() and stripos() used to accept NULL as second argument. This was deprecated with a warning, and then removed in PHP 8.

## PHP code

```php
<?php

var_dump(strpos('1', null));

?>
```

## Before

```text
strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior
```

## After

```text
strpos(): Passing null to parameter #2 ($needle) of type string is deprecated
```

## PHP version change

This behavior was deprecated in 7.3.

This behavior changed in 8.0.

## Error Messages

- [Passing null to parameter #2 ($needle) of type string is deprecated](https://php-errors.readthedocs.io/en/latest/messages/strlen%28%29%3A-passing-null-to-parameter-%231-%28%24string%29-of-type-string-is-deprecated.html)
