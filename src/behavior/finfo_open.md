# Finfo Moved Away From Resource

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finfo_open.html","headline":"Finfo Moved Away From Resource","name":"Finfo Moved Away From Resource","description":"Finfo functions have moved from resource to objects.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finfo_open.html","inLanguage":"en","dateModified":"2026-08-20T19:26:36+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Finfo Moved Away From Resource"}]}}</script>

Finfo functions have moved from resource to objects. In PHP 8.1, instead of returning a resource, it now returns a finfo object. Checks based on is_resource() must be upgraded, and are now dead code.

## PHP code

```php
<?php

var_dump(finfo_open());

?>
```

## Before

```text
resource(4) of type (file_info)
```

## After

```text
object(finfo)#1 (0) {
}
```

## PHP version change

This behavior changed in 8.1.

## See Also

- [finfo_open](https://www.php.net/manual/fr/function.finfo-open.php)
