# strcoll() And SORT_LOCALE_STRING Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strcollSortLocaleStringDeprecated.html","headline":"strcoll() And SORT_LOCALE_STRING Are Deprecated","name":"strcoll() And SORT_LOCALE_STRING Are Deprecated","description":"`strcoll()` compares strings according to the current locale, and the `SORT_LOCALE_STRING` flag makes `sort()` and related functions do the same.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strcollSortLocaleStringDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:50:25+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strcoll() And SORT_LOCALE_STRING Are Deprecated"}]}}</script>

`strcoll()` compares strings according to the current locale, and the `SORT_LOCALE_STRING` flag makes `sort()` and related functions do the same. Until PHP 8.6, both relied silently on the global, thread-unsafe locale set by `setlocale()`. In PHP 8.6, using either `strcoll()` or `SORT_LOCALE_STRING` emits a deprecation notice recommending the `intl` extension's `Collator` class instead.

## PHP code
```php
<?php

var_dump(strcoll('a', 'b'));

$arr = ['banana', 'Apple', 'cherry'];
sort($arr, SORT_LOCALE_STRING);
var_dump($arr);

?>
```
## Before
```text
int(-1)
array(3) {
  [0]=>
  string(5) "Apple" 
  [1]=>
  string(6) "banana" 
  [2]=>
  string(6) "cherry" 
}
```
## After
```text
PHP Deprecated:  Function strcoll() is deprecated since 8.6, use Collator::compare() instead

Deprecated: Function strcoll() is deprecated since 8.6, use Collator::compare() instead
int(-1)
PHP Deprecated:  Constant SORT_LOCALE_STRING is deprecated since 8.6, use one of the Collator::*sort*() methods instead

Deprecated: Constant SORT_LOCALE_STRING is deprecated since 8.6, use one of the Collator::*sort*() methods instead
array(3) {
  [0]=>
  string(5) "Apple" 
  [1]=>
  string(6) "banana" 
  [2]=>
  string(6) "cherry" 
}
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [strcoll()](https://www.php.net/strcoll)
- [sort()](https://www.php.net/sort)
- [Collator::compare()](https://www.php.net/collator.compare)
- [Collator::sort()](https://www.php.net/collator.sort)

## Error Messages

- [Function strcoll() is deprecated since 8.6, use Collator::compare() instead](https://php-errors.readthedocs.io/en/latest/messages/function-strcoll%28%29-is-deprecated-since-8.6%2C-use-collator%3A%3Acompare%28%29-instead.html)
- [Constant SORT_LOCALE_STRING is deprecated since 8.6, use one of the Collator::*sort*() methods instead](https://php-errors.readthedocs.io/en/latest/messages/constant-sort_locale_string-is-deprecated-since-8.6%2C-use-one-of-the-collator%3A%3A%2Asort%2A%28%29-methods-instead.html)

## Extension