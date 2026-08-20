# WeakMap Allows Reference Assignment To A Missing Key

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/weakMapReferenceAssign86.html","headline":"WeakMap Allows Reference Assignment To A Missing Key","name":"WeakMap Allows Reference Assignment To A Missing Key","description":"Taking a reference to a `WeakMap` offset with `=&` used to require the key to already be present in the map, otherwise PHP threw an `Error` saying the object was not contained in the `WeakMap`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/weakMapReferenceAssign86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"WeakMap Allows Reference Assignment To A Missing Key"}]}}</script>

Taking a reference to a `WeakMap` offset with `=&` used to require the key to already be present in the map, otherwise PHP threw an `Error` saying the object was not contained in the `WeakMap`. In PHP 8.6, a reference assignment on a missing key first creates the entry, exactly like `$array[$key] =& $ref` does for a regular array, and then binds the reference to it.

## PHP code

```php
<?php

$map = new WeakMap();
$obj = new stdClass();

$ref =& $map[$obj];
$ref = 'value via reference';

var_dump($map[$obj]);

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Object stdClass#2 not contained in WeakMap in /codes/weakMapReferenceAssign86.php:6
Stack trace:
#0 {main}
  thrown in /codes/weakMapReferenceAssign86.php on line 6

Fatal error: Uncaught Error: Object stdClass#2 not contained in WeakMap in /codes/weakMapReferenceAssign86.php:6
Stack trace:
#0 {main}
  thrown in /codes/weakMapReferenceAssign86.php on line 6
```

## After

```text
string(19) "value via reference" 
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [WeakMap](https://www.php.net/weakmap)
