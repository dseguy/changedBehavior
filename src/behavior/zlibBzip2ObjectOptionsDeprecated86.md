# Passing An Object As Filter Options To zlib/bzip2 Functions Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/zlibBzip2ObjectOptionsDeprecated86.html","headline":"Passing An Object As Filter Options To zlib/bzip2 Functions Is Deprecated","name":"Passing An Object As Filter Options To zlib/bzip2 Functions Is Deprecated","description":"`deflate_init()`, `inflate_init()`, and the `zlib.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/zlibBzip2ObjectOptionsDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:48:35+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Passing An Object As Filter Options To zlib/bzip2 Functions Is Deprecated"}]}}</script>

`deflate_init()`, `inflate_init()`, and the `zlib.deflate`/`bzip2.compress` stream filters accept an options value that PHP reads as an array. Until PHP 8.6, an object was silently accepted and read the same way as an array. In PHP 8.6, passing an object emits a deprecation notice recommending `get_object_vars()` first; the object's properties are still read the same way as before.

## PHP code
```php
<?php

class Options {
    public $level = 6;
}

$context = deflate_init(ZLIB_ENCODING_RAW, new Options());
var_dump($context !== false);

?>
```
## Before
```text
bool(true)
```
## After
```text
PHP Deprecated:  deflate_init(): Passing an object for argument #2 $option to deflate_init() is deprecated, call get_object_vars() first instead in /codes/zlibBzip2ObjectOptionsDeprecated86.php on line 7

Deprecated: deflate_init(): Passing an object for argument #2 $option to deflate_init() is deprecated, call get_object_vars() first instead in /codes/zlibBzip2ObjectOptionsDeprecated86.php on line 7
bool(true)
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [deflate_init()](https://www.php.net/deflate_init)
- [inflate_init()](https://www.php.net/inflate_init)
- [stream_filter_append()](https://www.php.net/stream_filter_append)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [deflate_init(): Passing an object for argument #2 $option to deflate_init() is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/passing-an-object-as-filter-options-to-zlib%2Fbzip2-functions-is-deprecated.html)
- [inflate_init(): Passing an object for argument #2 $option to inflate_init() is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/passing-an-object-as-filter-options-to-zlib%2Fbzip2-functions-is-deprecated.html)
- [stream_filter_append(): Passing an object for filter parameters for zlib.deflate is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/passing-an-object-as-filter-options-to-zlib%2Fbzip2-functions-is-deprecated.html)
- [stream_filter_append(): Passing an object for filter parameters for bzip2.compress is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/passing-an-object-as-filter-options-to-zlib%2Fbzip2-functions-is-deprecated.html)

## Extension
- [zlib](../extension.md#zlib)
- [bz2](../extension.md#bz2)