# Passing A $mode To mysqli_store_result() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mysqliStoreResultModeDeprecated.html","headline":"Passing A $mode To mysqli_store_result() Is Deprecated","name":"Passing A $mode To mysqli_store_result() Is Deprecated","description":"`mysqli_store_result()` used to accept an optional `$mode` flag telling mysqlnd whether to copy fetched data out of its internal buffer.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mysqliStoreResultModeDeprecated.html","inLanguage":"en","dateModified":"2026-09-09T15:23:09+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Passing A $mode To mysqli_store_result() Is Deprecated"}]}}</script>

`mysqli_store_result()` used to accept an optional `$mode` flag telling mysqlnd whether to copy fetched data out of its internal buffer. As of PHP 8.1, mysqlnd's internal buffering changed and this flag stopped having any effect: it is silently ignored no matter what is passed, without any notice. In PHP 8.4, passing the parameter at all, regardless of its value, additionally emits a deprecation notice; the (lack of) effect on the actual buffering behavior is unchanged, only the notice is new.

## PHP code
```php
<?php

mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = mysqli_init();
@$mysqli->real_connect('127.0.0.1', 'nouser', 'nopass', 'nodb', 1);
try {
    var_dump(mysqli_store_result($mysqli, 0));
} catch (\Throwable $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}
```
## Before
```text
Error: mysqli object is not fully initialized
```
## After
```text
PHP Deprecated:  Passing the $mode parameter is deprecated since 8.4, as it has been ignored since 8.1 in /codes/mysqliStoreResultModeDeprecated.php on line 7

Deprecated: Passing the $mode parameter is deprecated since 8.4, as it has been ignored since 8.1 in /codes/mysqliStoreResultModeDeprecated.php on line 7
Error: mysqli object is not fully initialized
```
## PHP version change
This behavior was deprecated in 8.4.

This behavior changed in .

## See Also

- [mysqli::store_result()](https://www.php.net/manual/en/mysqli.store-result.php)
- [PHP RFC: Deprecations for PHP 8.4](https://wiki.php.net/rfc/deprecations_php_8_4)

## Error Messages

- [Passing the $mode parameter is deprecated since 8.4, as it has been ignored since 8.1](https://php-errors.readthedocs.io/en/latest/messages/passing-the-%24mode-parameter-is-deprecated-since-8.4%2C-as-it-has-been-ignored-since-8.1.html)

## Extension
- [mysqli](../extension.md#mysqli)