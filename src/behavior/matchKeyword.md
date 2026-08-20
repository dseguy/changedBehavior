# match Is Now A Keyword

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/matchKeyword.html","headline":"match Is Now A Keyword","name":"match Is Now A Keyword","description":"match() was introduced as a new command.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/matchKeyword.html","inLanguage":"en","dateModified":"2026-08-20T19:28:45+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"match Is Now A Keyword"}]}}</script>

match() was introduced as a new command. As a side effect, it is now a PHP keyword, and it is not possible to create classes, functions or constants with that name.

## PHP code

```php
<?php

function match() {
	echo __FUNCTION__;
}

match();

?>
```

## Before

```text
match
```

## After

```text
PHP Parse error:  syntax error, unexpected token "match", expecting "(" 

Parse error: syntax error, unexpected token "match", expecting "(" 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected token "match", expecting "("](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22match%22%2C-expecting-%22%28%22.html)
