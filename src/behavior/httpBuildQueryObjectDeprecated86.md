# http_build_query() With An Object Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/httpBuildQueryObjectDeprecated86.html","headline":"http_build_query() With An Object Is Deprecated","name":"http_build_query() With An Object Is Deprecated","description":"`http_build_query()` accepts an object as its `$data` argument and builds the query string from its public properties.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/httpBuildQueryObjectDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:50:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"http_build_query() With An Object Is Deprecated"}]}}</script>

`http_build_query()` accepts an object as its `$data` argument and builds the query string from its public properties. Until PHP 8.6, this was silently accepted. In PHP 8.6, passing an object emits a deprecation notice recommending `get_object_vars()` first; the resulting query string is unchanged.

## PHP code
```php
<?php

class Data {
    public $a = 1;
    public $b = 2;
}

var_dump(http_build_query(new Data()));

?>
```
## Before
```text
string(7) "a=1&b=2" 
```
## After
```text
PHP Deprecated:  http_build_query(): Passing an object for argument #1 $data to http_build_query() is deprecated, call get_object_vars() first instead in /codes/httpBuildQueryObjectDeprecated86.php on line 8

Deprecated: http_build_query(): Passing an object for argument #1 $data to http_build_query() is deprecated, call get_object_vars() first instead in /codes/httpBuildQueryObjectDeprecated86.php on line 8
string(7) "a=1&b=2" 
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [http_build_query()](https://www.php.net/http_build_query)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [http_build_query(): Passing an object for argument #1 $data to http_build_query() is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/http_build_query%28%29-with-an-object-is-deprecated.html)

## Extension