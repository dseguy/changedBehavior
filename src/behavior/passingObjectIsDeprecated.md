# Passing Objects Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/passingObjectIsDeprecated.html","headline":"Passing Objects Is Deprecated","name":"Passing Objects Is Deprecated","description":"Several array functions, such as `current`, `next`, `prev`, `reset` used to accept both objects and arrays.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/passingObjectIsDeprecated.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Passing Objects Is Deprecated"}]}}</script>

Several array functions, such as `current`, `next`, `prev`, `reset` used to accept both objects and arrays. Since PHP 8.0, they only work on arrays.



`each` is also part of this modernization, although it was entirely removed in PHP 8.0. 



## PHP code

```php
<?php

$x = (object) ['a' => 1];

var_dump(current($x));

?>
```

## Before

```text
int(1)
```

## After

```text
PHP Deprecated:  current(): Calling current() on an object is deprecated

Deprecated: current(): Calling current() on an object is deprecated
int(1)
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Calling %s() on an object is deprecated](https://php-errors.readthedocs.io/en/latest/messages/calling-%25s%28%29-on-an-object-is-deprecated.html)
