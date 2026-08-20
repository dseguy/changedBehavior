# cUrl Moved Away From Resource

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curl_init.html","headline":"cUrl Moved Away From Resource","name":"cUrl Moved Away From Resource","description":"Curl functions have moved from resource to objects in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curl_init.html","inLanguage":"en","dateModified":"2026-01-20T06:54:40+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"cUrl Moved Away From Resource"}]}}</script>

Curl functions have moved from resource to objects in PHP 8.0. Instead of returning a resource, it now returns a `CurlHandle` object. Checks based on is_resource() must be upgraded, and are now dead code.

## PHP code

```php
<?php

var_dump(curl_init('https://www.php.net'));

?>
```

## Before

```text
resource(4) of type (curl)
```

## After

```text
object(CurlHandle)#1 (0) {
}
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [curl_init](https://www.php.net/manual/fr/function.curl-init.php)
