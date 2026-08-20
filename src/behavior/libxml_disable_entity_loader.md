# libxml_disable_entity_loader() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/libxml_disable_entity_loader.html","headline":"libxml_disable_entity_loader() Is Deprecated","name":"libxml_disable_entity_loader() Is Deprecated","description":"libxml_disable_entity_loader() has been deprecated since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/libxml_disable_entity_loader.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"libxml_disable_entity_loader() Is Deprecated"}]}}</script>

libxml_disable_entity_loader() has been deprecated since PHP 8.0, and actually, does not execute any code. The error message was upgraded to make it more explicit.

## PHP code

```php
<?php

var_dump(libxml_disable_entity_loader(true));

?>
```

## Before

```text
PHP Deprecated:  Function libxml_disable_entity_loader() is deprecated 

Deprecated: Function libxml_disable_entity_loader() is deprecated 
bool(false)
```

## After

```text
PHP Deprecated:  Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default 

Deprecated: Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default 
bool(false)
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default](https://php-errors.readthedocs.io/en/latest/messages/function-libxml_disable_entity_loader%28%29-is-deprecated-since-8.0%2C-as-external-entity-loading-is-disabled-by-default.html)
