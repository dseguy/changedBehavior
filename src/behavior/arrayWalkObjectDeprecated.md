# Passing An Object To array_walk() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayWalkObjectDeprecated.html","headline":"Passing An Object To array_walk() Is Deprecated","name":"Passing An Object To array_walk() Is Deprecated","description":"`array_walk()` and `array_walk_recursive()` have always accepted an object as their first argument, walking its accessible public properties as if they were an array.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayWalkObjectDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:48:33+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Passing An Object To array_walk() Is Deprecated"}]}}</script>

`array_walk()` and `array_walk_recursive()` have always accepted an object as their first argument, walking its accessible public properties as if they were an array. Until PHP 8.6, this worked silently. In PHP 8.6, passing an object to either function emits a deprecation notice suggesting `get_object_vars()` first, even though the walk itself still happens and mutates the object's properties exactly as before.

## PHP code

```php
<?php

class Point {
    public $x = 1;
    public $y = 2;
}

$p = new Point();
array_walk($p, function (&$value, $key) {
    $value = $value * 10;
});
var_dump($p);

?>
```

## Before

```text
object(Point)#1 (2) {
  ["x"]=>
  int(10)
  ["y"]=>
  int(20)
}
```

## After

```text
PHP Deprecated:  array_walk(): Passing an object for argument #1 $array to array_walk() is deprecated, call get_object_vars() first instead

Deprecated: array_walk(): Passing an object for argument #1 $array to array_walk() is deprecated, call get_object_vars() first instead
object(Point)#1 (2) {
  ["x"]=>
  int(10)
  ["y"]=>
  int(20)
}
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [array_walk()](https://www.php.net/array_walk)
- [array_walk_recursive()](https://www.php.net/array_walk_recursive)
- [get_object_vars()](https://www.php.net/get_object_vars)

## Error Messages

- [array_walk(): Passing an object for argument #1 $array to array_walk() is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/array_walk%28%29%3A-passing-an-object-for-argument-%231-%24array-to-array_walk%28%29-is-deprecated%2C-call-get_object_vars%28%29-first-instead.html)
