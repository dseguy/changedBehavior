# array_sum() Checks Operands Thoroughly

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arraySumChecks.html","headline":"array_sum() Checks Operands Thoroughly","name":"array_sum() Checks Operands Thoroughly","description":"array_sum() used to cast the arguments to integers before executing the additions.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arraySumChecks.html","inLanguage":"en","dateModified":"2025-10-07T20:19:27+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array_sum() Checks Operands Thoroughly"}]}}</script>

array_sum() used to cast the arguments to integers before executing the additions. Nowadays, the strange types raise a warning, as illustrated here with the array. 

## PHP code

```php
<?php

print array_sum([1, false, []]);

?>
```

## Before

```text
1
```

## After

```text
PHP Warning:  array_sum(): Addition is not supported on type array

Warning: array_sum(): Addition is not supported on type array
1
```

## PHP version change

This behavior changed in 8.3.

## See Also

- [A Comprehensive Guide to PHP's array_sum() Function](https://reintech.io/blog/a-comprehensive-guide-to-phps-array-sum-function)

## Error Messages

- [array_sum(): Addition is not supported on type array](https://php-errors.readthedocs.io/en/latest/messages/array_sum%28%29%3A-addition-is-not-supported-on-type-array.html)
