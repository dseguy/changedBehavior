# parse_str() Rejects NUL Bytes In The Query String

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/parseStrNullByteValueError.html","headline":"parse_str() Rejects NUL Bytes In The Query String","name":"parse_str() Rejects NUL Bytes In The Query String","description":"`parse_str()` used to accept a query string containing a NUL byte and silently parsed only the part before it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/parseStrNullByteValueError.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"parse_str() Rejects NUL Bytes In The Query String"}]}}</script>

`parse_str()` used to accept a query string containing a NUL byte and silently parsed only the part before it. In PHP 8.6, a NUL byte in the `$string` argument throws a `ValueError`.

## PHP code

```php
<?php

try {
    parse_str("foo\0bar=1", $result);
    var_dump($result);
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
array(1) {
  [foo]=>
  string(0) 
}
```

## After

```text
parse_str(): Argument #1 ($string) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [parse_str()](https://www.php.net/parse_str)

## Error Messages

- [parse_str(): Argument #1 ($string) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/parse_str%28%29%3A-argument-%231-%28%24string%29-must-not-contain-any-null-bytes.html)
