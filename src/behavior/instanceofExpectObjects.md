# instanceof Expect Objects

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/instanceofExpectObjects.html","headline":"instanceof Expect Objects","name":"instanceof Expect Objects","description":"PHP used to report a fatal error when provided with a value that is not an object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/instanceofExpectObjects.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"instanceof Expect Objects"}]}}</script>

PHP used to report a fatal error when provided with a value that is not an object. After PHP 7.3, it would return false in such case, and not break the execution.

## PHP code

```php
<?php

var_dump(null instanceof Countable);

function foo() : ?X { /**/ }
var_dump(foo() instanceof Countable); // possible error when foo() returns null

?>
```

## Before

```text
PHP Fatal error:  instanceof expects an object instance, constant given 

Fatal error: instanceof expects an object instance, constant given 
```

## After

```text
bool(false)
```

## PHP version change

This behavior changed in 7.3.

## See Also

- [Type Operator](https://www.php.net/manual/en/language.operators.type.php#language.operators.type)

## Error Messages

- [instanceof expects an object instance, constant given](https://php-errors.readthedocs.io/en/latest/messages/instanceof-expects-an-object-instance%2C-constant-given.html)
