# Cast In Const

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/castInConst.html","headline":"Cast In Const","name":"Cast In Const","description":"PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/castInConst.html","inLanguage":"en","dateModified":"2026-08-12T15:26:33+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Cast In Const"}]}}</script>

PHP 8.5 accepts the cast operators in constant expressions. Until then, operators such as `(int)`, `(float)`, `(string)`, `(array)` were not allowed.



While using a cast on a literal value is rather meaningless, static constant expressions may be build on top of other constants. 



Then, `(object)` is still not accepted, along with `(void)`. 

## PHP code

```php
<?php

const S = 123s;
const C = (int) S;

class X {
    const C = (int) S;
}

echo C;

?>
```

## Before

```text
PHP Fatal error:  Constant expression contains invalid operations

Fatal error: Constant expression contains invalid operations
```

## After

```text
123
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Constant expression contains invalid operations](https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html)
