# isset() On Constants

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/issetWithConstant.html","headline":"isset() On Constants","name":"isset() On Constants","description":"It was not possible to use isset() on a constant.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/issetWithConstant.html","inLanguage":"en","dateModified":"2026-08-20T16:07:06+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"isset() On Constants"}]}}</script>

It was not possible to use isset() on a constant. PHP mistook it with an expression, and stopped the execution with a Fatal error. 



Since PHP 7.0, it is possible to use isset() with a constant, in particular with the array syntax or the object syntax. Still, isset() should not be used to check the existence of the constant: rather, there is the native function `defined()`.

## PHP code

```php
<?php
const X = [1,2,3];

if (isset(X[4])) {
    echo 'set';
} else {
    echo 'not set';
}
?>
```

## Before

```text
PHP Fatal error:  Cannot use isset() on the result of an expression (you can use "null !== expression" instead) 

Fatal error: Cannot use isset() on the result of an expression (you can use "null !== expression" instead) 
```

## After

```text
not set
```

## PHP version change

This behavior changed in 7.0.

## Error Messages

- [Cannot use isset() on the result of an expression (you can use "null !== expression" instead)](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-isset%28%29-on-the-result-of-an-expression-%28you-can-use-%22null-%21%3D%3D-expression%22-instead%29.html)
