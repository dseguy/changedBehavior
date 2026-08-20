# Dynamic Class Constant

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dynamicClassConstant.html","headline":"Dynamic Class Constant","name":"Dynamic Class Constant","description":"To access a constant value with its name in a string, one required the constant() function.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dynamicClassConstant.html","inLanguage":"en","dateModified":"2025-09-17T16:40:46+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Dynamic Class Constant"}]}}</script>

To access a constant value with its name in a string, one required the constant() function. `constant('\A::'.$constantName)`.



In PHP 8.3, there is a dedicated syntax, to access those constants dynamically. 



## PHP code

```php
<?php

class a {
	public const A = 1;
}

$b = 'A';

echo A::{$b};

?>
```

## Before

```text
PHP Parse error:  syntax error
```

## After

```text
1
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [syntax error, unexpected token ";", expecting "("](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22%28%22.html)
