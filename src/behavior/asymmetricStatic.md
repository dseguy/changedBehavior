# Static Properties With Asymmetric Visibility

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/asymmetricStatic.html","headline":"Static Properties With Asymmetric Visibility","name":"Static Properties With Asymmetric Visibility","description":"Asymmetric visibility was introduced in version 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/asymmetricStatic.html","inLanguage":"en","dateModified":"2026-08-12T15:26:18+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Static Properties With Asymmetric Visibility"}]}}</script>

Asymmetric visibility was introduced in version 8.4. In that version, the asymmetric visibility was limited to non-static properties. In PHP 8.5, that feature is now extended to static properties.

## PHP code

```php
<?php

class x {
    public private(set) static int $a = 3;
}

?>
```

## Before

```text
PHP Fatal error:  Static property may not have asymmetric visibility

Fatal error: Static property may not have asymmetric visibility
```

## After

```text

```

## PHP version change

This behavior changed in 8.5-.

## Error Messages

- [Static property may not have asymmetric visibility](https://php-errors.readthedocs.io/en/latest/messages/static-property-may-not-have-asymmetric-visibility.html)
