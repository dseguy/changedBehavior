# ::class On Object

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ClassOnIdentifier.html","headline":"::class On Object","name":"::class On Object","description":"The ::class operator provides the fully qualified name of the identifier or object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ClassOnIdentifier.html","inLanguage":"en","dateModified":"2025-08-30T20:58:47+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"::class On Object"}]}}</script>

The ::class operator provides the fully qualified name of the identifier or object. It used to be working only on identifier or names, but it also works on objects, via variables and properties: then, it provides the fully qualified name of the underlying class. 



This is very convenient when the code needs to get a hold on the class, and only the object is provided.

## PHP code

```php
<?php

$a = new stdclass;
echo $a::class;

?>
```

## Before

```text
PHP Fatal error:  Cannot use ::class with dynamic class name

Fatal error: Cannot use ::class with dynamic class name
```

## After

```text
stdClass
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Cannot use ::class with dynamic class name](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%3A%3Aclass-with-dynamic-class-name.html)

## Analyzer

- [Classes/ClassOperatorOnObject](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/ClassOperatorOnObject.html)
