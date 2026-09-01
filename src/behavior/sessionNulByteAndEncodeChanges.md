# Session Functions Reject NUL Bytes And session_encode() Changes Its Empty-Session Return Value

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sessionNulByteAndEncodeChanges.html","headline":"Session Functions Reject NUL Bytes And session_encode() Changes Its Empty-Session Return Value","name":"Session Functions Reject NUL Bytes And session_encode() Changes Its Empty-Session Return Value","description":"PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sessionNulByteAndEncodeChanges.html","inLanguage":"en","dateModified":"2026-09-01T07:54:15+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Session Functions Reject NUL Bytes And session_encode() Changes Its Empty-Session Return Value"}]}}</script>

PHP 8.6 hardens several session functions against embedded NUL bytes and tightens `session_encode()`'s return value. Until PHP 8.6, `session_module_name()` silently truncated a `$name` argument containing a NUL byte at the first null character and emitted only a generic `"module not found"` warning; in PHP 8.6, it throws a `ValueError` instead. Separately, calling `session_encode()` on a session with no data in `$_SESSION` used to return `false`, the same value returned on an actual encoding failure; in PHP 8.6, it returns an empty string `""` for an empty session, reserving `false` for genuine encoding failures. The same NUL-byte hardening theme also applies to the `session.cookie_path`, `session.cookie_domain` and `session.cache_limiter` INI settings, which now emit a warning when a NUL byte is embedded in their value.

## PHP code
```php
<?php

$moduleName = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg('var_dump(session_module_name("foo" . chr(0) . "bar"));'));
echo $moduleName;

$dir = sys_get_temp_dir() . '/sessionNulByteAndEncodeChanges_' . getmypid();
mkdir($dir);
$code = 'session_save_path(' . var_export($dir, true) . '); session_start(); var_dump(session_encode()); session_destroy();';
$encoded = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg($code));
echo $encoded;
array_map('unlink', glob($dir . '/*'));
rmdir($dir);

?>
```
## Before
```text

Warning: session_module_name(): Session handler module "foo" cannot be found in Command line code on line 1
bool(false)
bool(false)
```
## After
```text

Fatal error: Uncaught ValueError: session_module_name(): Argument #1 ($module) must not contain any null bytes in Command line code:1
Stack trace:
#0 Command line code(1): session_module_name('foo\x00bar')
#1 {main}
  thrown in Command line code on line 1
string(0) "" 
```
## PHP version change
This behavior changed in 8.6.

## See Also

- [session_module_name()](https://www.php.net/session_module_name)
- [session_encode()](https://www.php.net/session_encode)
- [PHP 8.6 UPGRADING notes](https://github.com/php/php-src/blob/master/UPGRADING)

## Error Messages

- [session_module_name(): Argument #1 ($module) must not contain any null bytes](https://php-errors.readthedocs.io/en/latest/messages/session_module_name%28%29%3A-argument-%231-%28%24module%29-must-not-contain-any-null-bytes.html)

## Extension