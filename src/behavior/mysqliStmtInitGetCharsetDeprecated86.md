# mysqli::stmt_init() And mysqli_get_charset() Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mysqliStmtInitGetCharsetDeprecated86.html","headline":"mysqli::stmt_init() And mysqli_get_charset() Are Deprecated","name":"mysqli::stmt_init() And mysqli_get_charset() Are Deprecated","description":"`mysqli::stmt_init()` creates a statement object to prepare later, and `mysqli_get_charset()` returns information about the connection's current character set.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mysqliStmtInitGetCharsetDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:48:17+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"mysqli::stmt_init() And mysqli_get_charset() Are Deprecated"}]}}</script>

`mysqli::stmt_init()` creates a statement object to prepare later, and `mysqli_get_charset()` returns information about the connection's current character set. In PHP 8.6, calling either emits a deprecation notice, recommending `mysqli::prepare()` and `mysqli_character_set_name()` respectively; both functions keep their previous behavior otherwise.

## PHP code
```php
<?php

$mysqli = new mysqli();

try {
    $mysqli->stmt_init();
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

try {
    var_dump(mysqli_get_charset($mysqli));
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

?>
```
## Before
```text
Error: mysqli object is not fully initialized
Error: mysqli object is not fully initialized
```
## After
```text
PHP Deprecated:  Method mysqli::stmt_init() is deprecated since 8.6, use mysqli::prepare() instead in /codes/mysqliStmtInitGetCharsetDeprecated86.php on line 6

Deprecated: Method mysqli::stmt_init() is deprecated since 8.6, use mysqli::prepare() instead in /codes/mysqliStmtInitGetCharsetDeprecated86.php on line 6
Error: mysqli object is not fully initialized
PHP Deprecated:  Function mysqli_get_charset() is deprecated since 8.6, did you mean mysqli_character_set_name()? in /codes/mysqliStmtInitGetCharsetDeprecated86.php on line 12

Deprecated: Function mysqli_get_charset() is deprecated since 8.6, did you mean mysqli_character_set_name()? in /codes/mysqliStmtInitGetCharsetDeprecated86.php on line 12
Error: mysqli object is not fully initialized
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [mysqli::stmt_init()](https://www.php.net/mysqli.stmt-init)
- [mysqli::prepare()](https://www.php.net/mysqli.prepare)
- [mysqli_get_charset()](https://www.php.net/mysqli_get_charset)
- [mysqli_character_set_name()](https://www.php.net/mysqli_character_set_name)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Method mysqli::stmt_init() is deprecated since 8.6, use mysqli::prepare() instead](https://php-errors.readthedocs.io/en/latest/messages/mysqli%3A%3Astmt_init%28%29-and-mysqli_get_charset%28%29-are-deprecated.html)
- [Function mysqli_get_charset() is deprecated since 8.6, did you mean mysqli_character_set_name()?](https://php-errors.readthedocs.io/en/latest/messages/mysqli%3A%3Astmt_init%28%29-and-mysqli_get_charset%28%29-are-deprecated.html)

## Extension
- [mysqli](../extension.md#mysqli)