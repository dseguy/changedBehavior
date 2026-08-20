# assert() Throws Exception

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assertThrows.html","headline":"assert() Throws Exception","name":"assert() Throws Exception","description":"assert() is the PHP native implementation of assertions.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/assertThrows.html","inLanguage":"en","dateModified":"2025-10-07T20:22:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"assert() Throws Exception"}]}}</script>

assert() is the PHP native implementation of assertions. Until PHP 8.0, it would raise an error, while now, it throws an exception.

## PHP code

```php
<?php
// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
        print __METHOD__;

    return true;
}

set_error_handler('myErrorHandler');

try {
        assert(false);
} catch (\Error $e) {
        print $e->getMessage();
}

?>
```

## Before

```text
myErrorHandler
```

## After

```text
assert(false)
```

## PHP version change

This behavior changed in 8.0.
