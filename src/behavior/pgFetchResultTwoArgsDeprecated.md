# Calling pg_fetch_result() With 2 Arguments Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/pgFetchResultTwoArgsDeprecated.html","headline":"Calling pg_fetch_result() With 2 Arguments Is Deprecated","name":"Calling pg_fetch_result() With 2 Arguments Is Deprecated","description":"`pg_fetch_result()` accepted two call shapes: a 3-argument form giving the row and field explicitly, and a 2-argument form that omitted the row and implicitly read from an internal, auto-advancing row cursor instead.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/pgFetchResultTwoArgsDeprecated.html","inLanguage":"en","dateModified":"2026-09-09T15:22:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling pg_fetch_result() With 2 Arguments Is Deprecated"}]}}</script>

`pg_fetch_result()` accepted two call shapes: a 3-argument form giving the row and field explicitly, and a 2-argument form that omitted the row and implicitly read from an internal, auto-advancing row cursor instead. Mixing an explicit-row API with a stateful, cursor-based one in the same overloaded function made the behavior harder to predict. Until PHP 8.4, calling the 2-argument form was completely silent. In PHP 8.4, it emits a deprecation notice, in favor of always passing 3 arguments and using `null` for `$row` when the old auto-advancing behavior is wanted; the underlying validation of the other arguments (here, that $result is a real PgSql\Result) is unaffected.

## PHP code
```php
<?php

try {
    var_dump(pg_fetch_result('not-a-resource', 'field'));
} catch (\Throwable $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}
```
## Before
```text
TypeError: pg_fetch_result(): Argument #1 ($result) must be of type PgSql\Result, string given
```
## After
```text
PHP Deprecated:  Calling pg_fetch_result() with 2 arguments is deprecated, use the 3-parameter signature with a null $row parameter instead in /codes/pgFetchResultTwoArgsDeprecated.php on line 4

Deprecated: Calling pg_fetch_result() with 2 arguments is deprecated, use the 3-parameter signature with a null $row parameter instead in /codes/pgFetchResultTwoArgsDeprecated.php on line 4
TypeError: pg_fetch_result(): Argument #1 ($result) must be of type PgSql\Result, string given
```
## PHP version change
This behavior was deprecated in 8.4.

This behavior changed in .

## See Also

- [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)
- [pg_fetch_result()](https://www.php.net/manual/en/function.pg-fetch-result.php)

## Error Messages

- [Calling pg_fetch_result() with 2 arguments is deprecated, use the 3-parameter signature with a null $row parameter instead](https://php-errors.readthedocs.io/en/latest/messages/calling-pg_fetch_result%28%29-with-2-arguments-is-deprecated%2C.html)

## Extension
- [pgsql](../extension.md#pgsql)