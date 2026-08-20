# array_filter() Validates Its Mode Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayFilterModeValueError.html","headline":"array_filter() Validates Its Mode Argument","name":"array_filter() Validates Its Mode Argument","description":"`array_filter()` accepts a third argument that selects which values are passed to the callback: `ARRAY_FILTER_USE_VALUE`, `ARRAY_FILTER_USE_KEY`, or `ARRAY_FILTER_USE_BOTH`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayFilterModeValueError.html","inLanguage":"en","dateModified":"2026-07-15T07:58:15+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array_filter() Validates Its Mode Argument"}]}}</script>

`array_filter()` accepts a third argument that selects which values are passed to the callback: `ARRAY_FILTER_USE_VALUE`, `ARRAY_FILTER_USE_KEY`, or `ARRAY_FILTER_USE_BOTH`. Until PHP 8.6, any other value was silently treated as `0` (`ARRAY_FILTER_USE_VALUE`). In PHP 8.6, an invalid mode throws a `ValueError`.

## PHP code

```php
<?php

var_dump(array_filter([1, 0, 2, null], fn($v) => true, 99));

?>
```

## Before

```text
array(4) {
  [0]=>
  int(1)
  [1]=>
  int(0)
  [2]=>
  int(2)
  [3]=>
  NULL
}
```

## After

```text
array_filter(): Argument #3 ($mode) must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [array_filter()](https://www.php.net/array_filter)

## Error Messages

- [array_filter(): Argument #3 ($mode) must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH](https://php-errors.readthedocs.io/en/latest/messages/array_filter%28%29%3A-argument-%233-%28%24mode%29-must-be-one-of-array_filter_use_value%2C-array_filter_use_key%2C-or-array_filter_use_both.html)
