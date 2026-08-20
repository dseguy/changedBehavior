# (real) Is Replaced By (float)

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/real_cast.html","headline":"(real) Is Replaced By (float)","name":"(real) Is Replaced By (float)","description":"(real) is replaced by (float) in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/real_cast.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"(real) Is Replaced By (float)"}]}}</script>

(real) is replaced by (float) in PHP 8. It used to be a synonym of (float), and there is only one left. 

## PHP code

```php
<?php

print (real) 1;


?>
```

## Before

```text
PHP Deprecated:  The (real) cast is deprecated, use (float) instead -D

Deprecated: The (real) cast is deprecated, use (float) instead -D
1
```

## After

```text
PHP Parse error:  The (real) cast has been removed, use (float) instead -D

Parse error: The (real) cast has been removed, use (float) instead -D
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [The (real) cast is deprecated, use (float) instead](https://php-errors.readthedocs.io/en/latest/messages/the-%28real%29-cast-has-been-removed%2C-use-%28float%29-instead.html)
