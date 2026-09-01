# The mbstring Regex (mbregex) Functions Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mbregexDeprecated.html","headline":"The mbstring Regex (mbregex) Functions Are Deprecated","name":"The mbstring Regex (mbregex) Functions Are Deprecated","description":"The `mb_ereg*()` family of functions (`mb_ereg()`, `mb_eregi()`, `mb_ereg_match()`, `mb_ereg_replace()`, `mb_ereg_search()` and its siblings, `mb_split()`, and related functions) wraps the bundled Oniguruma regex library, which is no longer maintained upstream.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mbregexDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:53:51+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"The mbstring Regex (mbregex) Functions Are Deprecated"}]}}</script>

The `mb_ereg*()` family of functions (`mb_ereg()`, `mb_eregi()`, `mb_ereg_match()`, `mb_ereg_replace()`, `mb_ereg_search()` and its siblings, `mb_split()`, and related functions) wraps the bundled Oniguruma regex library, which is no longer maintained upstream. Until PHP 8.6, calling any of these functions worked silently. In PHP 8.6, calling any mbregex function emits a deprecation notice, even though the function still behaves exactly as before.

## PHP code
```php
<?php

var_dump(mb_ereg("^a", "abc"));

?>
```
## Before
```text
bool(true)
```
## After
```text
PHP Deprecated:  Function mb_ereg() is deprecated since 8.6, because the underlying library is no longer maintained in /codes/mbregexDeprecated.php on line 3

Deprecated: Function mb_ereg() is deprecated since 8.6, because the underlying library is no longer maintained in /codes/mbregexDeprecated.php on line 3
bool(true)
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [mb_ereg()](https://www.php.net/mb_ereg)
- [PHP 8.6 UPGRADING notes](https://github.com/php/php-src/blob/master/UPGRADING)

## Error Messages

- [Function mb_ereg() is deprecated since 8.6, because the underlying library is no longer maintained](https://php-errors.readthedocs.io/en/latest/messages/function-mb_ereg%28%29-is-deprecated-since-8.6%2C-because-the-underlying-library-is-no-longer-maintained.html)

## Extension
- [mbstring](../extension.md#mbstring)