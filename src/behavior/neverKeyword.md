# never Is Now A Keyword

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/neverKeyword.html","headline":"never Is Now A Keyword","name":"never Is Now A Keyword","description":"Never became a PHP reserved keyword in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/neverKeyword.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"never Is Now A Keyword"}]}}</script>

Never became a PHP reserved keyword in PHP 8.1. It is used as special type, and cannot be used anymore for function names, classnames, etc.

## PHP code

```php
<?php

class never {
	function __construct() {
		print __METHOD__;
	}
}

new never;

?>
```

## Before

```text
never::__construct
```

## After

```text
PHP Fatal error:  Cannot use 'never' as class name as it is reserved 

Fatal error: Cannot use 'never' as class name as it is reserved 
```

## PHP version change

This behavior changed in 8.1.
