# Never Arrow Function

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/neverArrowFunction.html","headline":"Never Arrow Function","name":"Never Arrow Function","description":"The never type requires the closure to not return, but the arrow function always returns something.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/neverArrowFunction.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Never Arrow Function"}]}}</script>

The never type requires the closure to not return, but the arrow function always returns something. By using die(), that closure doesn't return anymore, but PHP only recognized this since PHP 8.2. Before PHP 8.1, it was valid syntax, as `never` was recognized as a class name.

## PHP code

```php
<?php

fn($a) : never => die(); 

?>
```

## Before

```text
PHP Fatal error:  A never-returning function must not return

Fatal error: A never-returning function must not return
```

## After

```text

```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [A never-returning function must not return](https://php-errors.readthedocs.io/en/latest/messages/never-returning-function-must-not-implicitly-return.html)
