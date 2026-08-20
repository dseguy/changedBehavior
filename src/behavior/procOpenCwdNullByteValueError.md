# proc_open() Rejects NUL Bytes In The Working Directory

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/procOpenCwdNullByteValueError.html","headline":"proc_open() Rejects NUL Bytes In The Working Directory","name":"proc_open() Rejects NUL Bytes In The Working Directory","description":"`proc_open()` used to accept a `$cwd` argument containing a NUL byte and passed the truncated path straight to the operating system, which then failed to spawn the process.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/procOpenCwdNullByteValueError.html","inLanguage":"en","dateModified":"2026-07-26T06:32:42+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"proc_open() Rejects NUL Bytes In The Working Directory"}]}}</script>

`proc_open()` used to accept a `$cwd` argument containing a NUL byte and passed the truncated path straight to the operating system, which then failed to spawn the process. In PHP 8.6, a NUL byte in `$cwd` throws a `ValueError` before attempting to start the process.

## PHP code

```php
<?php

try {
    var_dump(proc_open('echo hi', [], $pipes, "foo\0bar"));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
PHP Warning:  proc_open(): posix_spawn() failed: No such file or directory in /codes/procOpenCwdNullByteValueError.php on line 4

Warning: proc_open(): posix_spawn() failed: No such file or directory in /codes/procOpenCwdNullByteValueError.php on line 4
bool(false)
```

## After

```text
proc_open(): Argument #4 ($cwd) must not contain any null bytes
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [proc_open()](https://www.php.net/proc_open)

## Error Messages

- [proc_open(): Argument #4 ($cwd) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/proc_open%28%29%3A-argument-%234-%28%24cwd%29-must-not-contain-any-null-bytes.html)
