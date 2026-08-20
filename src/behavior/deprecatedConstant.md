# Constant %s is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/deprecatedConstant.html","headline":"Constant %s is deprecated","name":"Constant %s is deprecated","description":"With new versions, PHP deprecates some constants.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/deprecatedConstant.html","inLanguage":"en","dateModified":"2026-08-12T15:27:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Constant %s is deprecated"}]}}</script>

With new versions, PHP deprecates some constants. Mostly global constants, but also class constants, when needed.



8.4

+ SUNFUNCS_RET_TIMESTAMP

+ SUNFUNCS_RET_STRING

+ SUNFUNCS_RET_DOUBLE



8.3

+ ASSERT_ACTIVE

+ ASSERT_BAIL

+ ASSERT_CALLBACK

+ ASSERT_EXCEPTION

+ ASSERT_WARNING









## PHP code

```php
<?php

echo SUNFUNCS_RET_TIMESTAMP;

?>
```

## Before

```text
0
```

## After

```text
PHP Deprecated:  Constant SUNFUNCS_RET_TIMESTAMP is deprecated 

Deprecated: Constant SUNFUNCS_RET_TIMESTAMP is deprecated 
0
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Constant SUNFUNCS_RET_TIMESTAMP is deprecated ](https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-is-deprecated.html)
