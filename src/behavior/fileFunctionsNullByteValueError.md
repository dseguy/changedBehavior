# Multiple File Functions Reject NUL Bytes In Filenames

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/fileFunctionsNullByteValueError.html","headline":"Multiple File Functions Reject NUL Bytes In Filenames","name":"Multiple File Functions Reject NUL Bytes In Filenames","description":"Several filesystem functions, such as `file_exists()`, used to accept a filename containing a NUL byte.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/fileFunctionsNullByteValueError.html","inLanguage":"en","dateModified":"2026-09-01T07:51:27+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Multiple File Functions Reject NUL Bytes In Filenames"}]}}</script>

Several filesystem functions, such as `file_exists()`, used to accept a filename containing a NUL byte; the string was silently truncated by the underlying C library call, or the argument was simply rejected with a warning and a `NULL`/`false` return value. In PHP 8.6, a NUL byte in the filename argument of these file functions throws a `ValueError` instead.

## PHP code

```php
<?php

try {
    var_dump(file_exists("/tmp/foo\0bar"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
PHP Warning:  file_exists() expects parameter 1 to be a valid path, string given in /codes/fileFunctionsNullByteValueError.php on line 4

Warning: file_exists() expects parameter 1 to be a valid path, string given in /codes/fileFunctionsNullByteValueError.php on line 4
NULL
```

## After

```text
file_exists(): Argument #1 ($filename) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [file_exists()](https://www.php.net/file_exists)

## Error Messages

- [file_exists(): Argument #1 ($filename) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/file_exists%28%29%3A-argument-%231-%28%24filename%29-must-not-contain-any-null-bytes.html)
