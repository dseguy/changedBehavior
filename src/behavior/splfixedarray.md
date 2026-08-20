# SplFixedArray Is Now An IteratorAggregate

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splfixedarray.html","headline":"SplFixedArray Is Now An IteratorAggregate","name":"SplFixedArray Is Now An IteratorAggregate","description":"SplFixedArray` used to be an `Iterator`, and is now an `IteratorAggregate`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splfixedarray.html","inLanguage":"en","dateModified":"2026-02-06T21:41:10+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"SplFixedArray Is Now An IteratorAggregate"}]}}</script>

SplFixedArray` used to be an `Iterator`, and is now an `IteratorAggregate`. 



They don't have strictly identical behaviors. They're both iterable but they go about it two completely different ways: `Iterator` means the object modifies itself during iteration, and `IteratorAggregater`` means the object remains unchanged because it uses a proxy object to handle iteration.



Note that is it not possible to extends both at the same time: they are incompatible.

## PHP code

```php
<?php
$array = new SplFixedArray(5);

var_dump($array instanceof Iterator);
var_dump($array instanceof IteratorAggregate);

?>
```

## Before

```text
bool(true)
bool(false)
```

## After

```text
bool(false)
bool(true)
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [Standard PHP Library (SPL)](https://www.php.net/manual/en/migration80.incompatible.php#migration80.incompatible.spl)
- [Classes extending IteratorAggregate can not implement RecursiveIterator](https://github.com/php/php-src/issues/8156)
- [Introduction to Iterators and Generators in PHP](https://www.entropywins.wtf/blog/2017/10/16/introduction-to-iterators-and-generators-in-php/)
- [IteratorAggregate](https://www.php.net/manual/en/class.iteratoraggregate.php)
- [Iterator](https://www.php.net/manual/en/class.iterator.php)
