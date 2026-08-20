# Final Class Constants

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finalClassConstants.html","headline":"Final Class Constants","name":"Final Class Constants","description":"Class constants can be made final, starting with PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finalClassConstants.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Final Class Constants"}]}}</script>

Class constants can be made final, starting with PHP 8.2.

## PHP code

```php
<?php

class x {
	final public const A = 1;
}

echo x::A;

?>
```

## Before

```text
PHP Fatal error:  Cannot use 'final' as constant modifier 
```

## After

```text
1
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Cannot use 'final' as constant modifier](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27final%27-as-constant-modifier.html)
