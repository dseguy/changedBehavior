# spl_object_hash() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splObjectHashDeprecated.html","headline":"spl_object_hash() Is Deprecated","name":"spl_object_hash() Is Deprecated","description":"`spl_object_hash()` returns a string uniquely identifying an object for the lifetime of that object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splObjectHashDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:49:31+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"spl_object_hash() Is Deprecated"}]}}</script>

`spl_object_hash()` returns a string uniquely identifying an object for the lifetime of that object. In PHP 8.6, calling `spl_object_hash()` emits a deprecation notice, in favor of `spl_object_id()`, which returns an integer identifier instead of a string and is cheaper to compute. The function still returns a value in PHP 8.6.

## PHP code
```php
<?php

$obj = new stdClass();
var_dump(spl_object_hash($obj));

?>
```
## Before
```text
string(32) "0000000038bff86f0000000058eaf75e" 
```
## After
```text
PHP Deprecated:  Function spl_object_hash() is deprecated since 8.6, consider using spl_object_id() instead in /codes/splObjectHashDeprecated.php on line 4

Deprecated: Function spl_object_hash() is deprecated since 8.6, consider using spl_object_id() instead in /codes/splObjectHashDeprecated.php on line 4
string(32) "00000000000000010000000000000000" 
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [spl_object_hash()](https://www.php.net/spl_object_hash)
- [spl_object_id()](https://www.php.net/spl_object_id)

## Error Messages

- [Function spl_object_hash() is deprecated since 8.6, consider using spl_object_id() instead](https://php-errors.readthedocs.io/en/latest/messages/function-spl_object_hash%28%29-is-deprecated-since-8.6%2C-consider-using-spl_object_id%28%29-instead.html)

## Extension
- [SPL](../extension.md#SPL)