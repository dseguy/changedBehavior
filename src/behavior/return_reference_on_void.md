# Return Reference On Void

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/return_reference_on_void.html","headline":"Return Reference On Void","name":"Return Reference On Void","description":"There are methods that return void.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/return_reference_on_void.html","inLanguage":"en","dateModified":"2026-02-10T08:42:18+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Return Reference On Void"}]}}</script>

There are methods that return void; and methods that return a reference. Until PHP 8.1, they could be the same, although a Notice was emitted. This is now deprecated behavior in PHP 8.1, and shall disappear in PHP 9.

## PHP code

```php
<?php

function &foo() : void {
	echo __METHOD__;
	
	return;
}

foo();

?>
```

## Before

```text
fooPHP Notice:  Only variable references should be returned by reference 

Notice: Only variable references should be returned by reference 
```

## After

```text
PHP Deprecated:  Returning by reference from a void function is deprecated 

Deprecated: Returning by reference from a void function is deprecated 
fooPHP Notice:  Only variable references should be returned by reference 

Notice: Only variable references should be returned by reference 
```

## PHP version change

This behavior was deprecated in 8.1.

This behavior changed in 9.0.

## Error Messages

- [Returning by reference from a void function is deprecated](https://php-errors.readthedocs.io/en/latest/messages/returning-by-reference-from-a-void-function-is-deprecated.html)

## Analyzer

- [Functions/NoReferencedVoid](https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/NoReferencedVoid.html)
