# Cannot Bind $this To Static Closure

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticClosureBinding.html","headline":"Cannot Bind $this To Static Closure","name":"Cannot Bind $this To Static Closure","description":"A static closure does not import any variables from the defining context.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticClosureBinding.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Cannot Bind $this To Static Closure"}]}}</script>

A static closure does not import any variables from the defining context. In particular, it doesn't import the pseudo-variable `$this`. This also applies when trying to reconfigure a closure with its `bindTo()` method.

## PHP code

```php
<?php

class A {}

$fn = static function () {  };

$d = $fn->bindTo(new A, 'A');

?>
```

## Before

```text
PHP Warning:  Cannot bind an instance to a static closure

Warning: Cannot bind an instance to a static closure
```

## After

```text
PHP Warning:  Cannot bind an instance to a static closure, this will be an error in PHP 9

Warning: Cannot bind an instance to a static closure, this will be an error in PHP 9
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Cannot bind an instance to a static closure](https://php-errors.readthedocs.io/en/latest/messages/cannot-bind-an-instance-to-a-static-closure.html)
