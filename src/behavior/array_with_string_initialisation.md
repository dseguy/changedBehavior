# Array Usage With String Initialisation

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_with_string_initialisation.html","headline":"Array Usage With String Initialisation","name":"Array Usage With String Initialisation","description":"String and arrays share the same syntax when using integer index: it accesses one element in the array or string, to reading or modifying.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_with_string_initialisation.html","inLanguage":"en","dateModified":"2025-10-07T20:21:12+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Array Usage With String Initialisation"}]}}</script>

String and arrays share the same syntax when using integer index: it accesses one element in the array or string, to reading or modifying. 



On the other hand, strings do not accept string as index. In older PHP versions, PHP would convert the string to an integer, and apply the operation. In PHP 8.0, it is now forbidden to use those index, unless the string can be converted to an integer.

## PHP code

```php
<?php

$s = 'abc';
$s[3] = 3;
$s['4'] = '4';
print $s;
$s['c'] = 3;

?>
```

## Before

```text
abc34PHP Warning:  Illegal string offset 'c'

Warning: Illegal string offset 'c'
```

## After

```text
abc34PHP Fatal error:  Uncaught TypeError: Cannot access offset of type string on string

Fatal error: Uncaught TypeError: Cannot access offset of type string on string
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Cannot access offset of type string on string](https://php-errors.readthedocs.io/en/latest/messages/cannot-access-offset-of-type-%25s-on-%25s.html)
