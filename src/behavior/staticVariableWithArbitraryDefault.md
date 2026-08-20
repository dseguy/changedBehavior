# Static Variable Accepts Functioncalls As Default

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticVariableWithArbitraryDefault.html","headline":"Static Variable Accepts Functioncalls As Default","name":"Static Variable Accepts Functioncalls As Default","description":"Static variables are actually variables: as such, they can be inited with the result of a functioncall.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticVariableWithArbitraryDefault.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Static Variable Accepts Functioncalls As Default"}]}}</script>

Static variables are actually variables: as such, they can be inited with the result of a functioncall. 



Until PHP 8.3, their default values were using static constant expression, built around constants and operators. 



Since PHP 8.3, it is possible to also set their first value as a function or method call.



Properties and parameters are not allowed to use these expressions: they must be valid at compile time.

## PHP code

```php
<?php

function foo() {
	static $x = goo(1);
	
	return ++$x;
}

function goo() {
	return 3;
}

echo foo();
echo foo();

?>
```

## Before

```text
PHP Fatal error:  Constant expression contains invalid operations

Fatal error: Constant expression contains invalid operations
```

## After

```text
45
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Constant expression contains invalid operations](https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html)
