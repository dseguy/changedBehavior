# mixed Is Now A Keyword

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mixedKeyword.html","headline":"mixed Is Now A Keyword","name":"mixed Is Now A Keyword","description":"mixed was introduced in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mixedKeyword.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"mixed Is Now A Keyword"}]}}</script>

mixed was introduced in PHP 8.0 as a new type. As a side effect, it is now a PHP keyword, and it is not possible to create classes, functions or constants with that name.

## PHP code

```php
<?php

class mixed {
	function __construct() {
		echo __METHOD__;
	}
}

new mixed;

?>
```

## Before

```text
mixed::__construct
```

## After

```text
PHP Fatal error:  Cannot use 'mixed' as class name as it is reserved 

Fatal error: Cannot use 'mixed' as class name as it is reserved 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Cannot use 'mixed' as class name as it is reserved](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27mixed%27-as-class-name-as-it-is-reserved.html)
