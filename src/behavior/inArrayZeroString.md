# in_array() Doesn't Confuse 0 And Empty String

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/inArrayZeroString.html","headline":"in_array() Doesn't Confuse 0 And Empty String","name":"in_array() Doesn't Confuse 0 And Empty String","description":"in_array() makes a relaxed comparison of values in its arguments.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/inArrayZeroString.html","inLanguage":"en","dateModified":"2026-01-27T08:07:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"in_array() Doesn't Confuse 0 And Empty String"}]}}</script>

in_array() makes a relaxed comparison of values in its arguments. When there are 0 and empty strings, those used to be considered identical in PHP 7 and they are now distinct in PHP 8. 



This behavior change doesn't impact calls to in_array() with the third argument `strict_comparison`. That feature is unchanged in PHP 8.



## PHP code

```php
<?php

var_dump(in_array('', [ 0]));

?>
```

## Before

```text
bool(true)
```

## After

```text
bool(false)
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [in_array](https://www.php.net/manual/en/function.in-array.php)
