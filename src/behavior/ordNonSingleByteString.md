# Providing A String That Is Not One Byte Long To ord() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ordNonSingleByteString.html","headline":"Providing A String That Is Not One Byte Long To ord() Is Deprecated","name":"Providing A String That Is Not One Byte Long To ord() Is Deprecated","description":"The `ord()` function returns the ordinal value of the first byte of a string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ordNonSingleByteString.html","inLanguage":"en","dateModified":"2026-08-28T19:03:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Providing A String That Is Not One Byte Long To ord() Is Deprecated"}]}}</script>

The `ord()` function returns the ordinal value of the first byte of a string. When the provided string is longer than one byte, only the first byte is used and the remaining bytes are silently discarded. This implicit behavior is a source of confusion, especially when working with multi-byte encodings such as UTF-8, where a single character may span several bytes. Since PHP 8.5, calling `ord()` with a string that is not exactly one byte long is deprecated: use the `$str[0]` syntax to extract the first byte explicitly before passing it to `ord()`.

## PHP code
```php
<?php

$str = '我';

echo ord($str);

?>
```
## Before
```text
230
```
## After
```text
PHP Deprecated:  Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead in /codes/ordNonSingleByteString.php on line 5

Deprecated: Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead in /codes/ordNonSingleByteString.php on line 5
230
```
## PHP version change
This behavior was deprecated in 8.5.

This behavior changed in 8.5.

## Error Messages

- [0](https://php-errors.readthedocs.io/en/latest/messages/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord%28%24str%5B0%5D%29-instead.html)

## Extension