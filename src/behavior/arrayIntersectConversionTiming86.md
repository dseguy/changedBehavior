# array_intersect() Converts Values While Scanning Inputs

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayIntersectConversionTiming86.html","headline":"array_intersect() Converts Values While Scanning Inputs","name":"array_intersect() Converts Values While Scanning Inputs","description":"`array_intersect()` compares values as strings.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayIntersectConversionTiming86.html","inLanguage":"en","dateModified":"2026-08-13T10:17:39+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array_intersect() Converts Values While Scanning Inputs"}]}}</script>

`array_intersect()` compares values as strings. Until PHP 8.6, non-string values were converted to strings lazily, during the pairwise sort-based comparisons used internally. In PHP 8.6, all input arrays (once at least two are known to be non-empty) are scanned upfront and their values converted to strings before any comparison happens. This changes the number and order of conversion warnings and `__toString()` calls -- fewer calls overall, since each value is now converted once instead of possibly several times during comparisons -- and can change results for a stateful `__toString()` implementation.

## PHP code

```php
<?php

class Stateful {
    private static $calls = 0;
    public function __toString(): string {
        self::$calls++;
        echo "toString call #".self::$calls."\n";
        return 'x';
    }
}

$a = [new Stateful()];
$b = ['x'];
$c = ['x'];

$result = array_intersect($a, $b, $c);
var_dump(count($result));

?>
```

## Before

```text
toString call #1
toString call #2
int(1)
```

## After

```text
toString call #1
int(1)
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [array_intersect()](https://www.php.net/array_intersect)
