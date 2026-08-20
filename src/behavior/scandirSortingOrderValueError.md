# scandir() Validates Its Sorting Order Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/scandirSortingOrderValueError.html","headline":"scandir() Validates Its Sorting Order Argument","name":"scandir() Validates Its Sorting Order Argument","description":"`scandir()` accepts a second argument that selects the sort order of the returned entries: `SCANDIR_SORT_ASCENDING`, `SCANDIR_SORT_DESCENDING`, or `SCANDIR_SORT_NONE`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/scandirSortingOrderValueError.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"scandir() Validates Its Sorting Order Argument"}]}}</script>

`scandir()` accepts a second argument that selects the sort order of the returned entries: `SCANDIR_SORT_ASCENDING`, `SCANDIR_SORT_DESCENDING`, or `SCANDIR_SORT_NONE`. Until PHP 8.6, any other value was silently accepted and treated as descending order. In PHP 8.6, an invalid sorting order throws a `ValueError`.

## PHP code

```php
<?php

$dir = sys_get_temp_dir() . '/scandir_86_test';
@mkdir($dir);
touch($dir . '/a.txt');
touch($dir . '/b.txt');

try {
    var_dump(scandir($dir, 99));
} catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
```

## Before

```text
array(4) {
  [0]=>
  string(5) b.txt
  [1]=>
  string(5) a.txt
  [2]=>
  string(2) ..
  [3]=>
  string(1) .
}
```

## After

```text
scandir(): Argument #2 ($sorting_order) must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [scandir()](https://www.php.net/scandir)

## Error Messages

- [scandir(): Argument #2 ($sorting_order) must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants](https://php-errors.readthedocs.io/en/latest/messages/scandir%28%29%3A-argument-%232-%28%24sorting_order%29-must-be-one-of-the-scandir_sort_ascending%2C-scandir_sort_descending%2C-or-scandir_sort_none-constants.html)
