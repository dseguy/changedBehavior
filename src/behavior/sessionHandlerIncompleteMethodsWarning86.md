# Incomplete SessionHandlerInterface Implementations Now Warn

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sessionHandlerIncompleteMethodsWarning86.html","headline":"Incomplete SessionHandlerInterface Implementations Now Warn","name":"Incomplete SessionHandlerInterface Implementations Now Warn","description":"`SessionHandlerInterface` does not itself declare `create_sid()` or `validateId()`, yet the session extension has long called them on a custom handler when present.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sessionHandlerIncompleteMethodsWarning86.html","inLanguage":"en","dateModified":"2026-09-06T08:48:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Incomplete SessionHandlerInterface Implementations Now Warn"}]}}</script>

`SessionHandlerInterface` does not itself declare `create_sid()` or `validateId()`, yet the session extension has long called them on a custom handler when present. Until PHP 8.6, a class implementing `SessionHandlerInterface` without either method was silently accepted. In PHP 8.6, registering such a class with `session_set_save_handler()` emits a warning for each missing method, stating that it will be required starting in PHP 9.0.

## PHP code
```php
<?php

class MyHandler implements \SessionHandlerInterface {
    public function open($path, $name): bool { return true; }
    public function close(): bool { return true; }
    public function read($id): string { return ''; }
    public function write($id, $data): bool { return true; }
    public function destroy($id): bool { return true; }
    public function gc($max_lifetime): int|false { return 0; }
}

var_dump(session_set_save_handler(new MyHandler()));

?>
```
## Before
```text
bool(true)
```
## After
```text
PHP Warning:  Class MyHandler implementing SessionHandlerInterface is missing the create_sid() method which will be required in PHP 9.0 in /codes/sessionHandlerIncompleteMethodsWarning86.php on line 3

Warning: Class MyHandler implementing SessionHandlerInterface is missing the create_sid() method which will be required in PHP 9.0 in /codes/sessionHandlerIncompleteMethodsWarning86.php on line 3
PHP Warning:  Class MyHandler implementing SessionHandlerInterface is missing the validateId() method which will be required in PHP 9.0 in /codes/sessionHandlerIncompleteMethodsWarning86.php on line 3

Warning: Class MyHandler implementing SessionHandlerInterface is missing the validateId() method which will be required in PHP 9.0 in /codes/sessionHandlerIncompleteMethodsWarning86.php on line 3
PHP Warning:  session_set_save_handler(): Session save handler cannot be changed after headers have already been sent (sent from /codes/sessionHandlerIncompleteMethodsWarning86.php on line 3) in /codes/sessionHandlerIncompleteMethodsWarning86.php on line 12

Warning: session_set_save_handler(): Session save handler cannot be changed after headers have already been sent (sent from /codes/sessionHandlerIncompleteMethodsWarning86.php on line 3) in /codes/sessionHandlerIncompleteMethodsWarning86.php on line 12
bool(false)
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [SessionHandlerInterface](https://www.php.net/class.sessionhandlerinterface)
- [session_set_save_handler()](https://www.php.net/session_set_save_handler)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Class MyHandler implementing SessionHandlerInterface is missing the create_sid() method which will be required in PHP 9.0](https://php-errors.readthedocs.io/en/latest/messages/incomplete-sessionhandlerinterface-implementations-now-warn.html)
- [Class MyHandler implementing SessionHandlerInterface is missing the validateId() method which will be required in PHP 9.0](https://php-errors.readthedocs.io/en/latest/messages/incomplete-sessionhandlerinterface-implementations-now-warn.html)

## Extension
- [session](../extension.md#session)