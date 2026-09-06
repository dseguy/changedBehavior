# Stateless Static Closures Are Cached And Reused

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticClosureIdentityCaching86.html","headline":"Stateless Static Closures Are Cached And Reused","name":"Stateless Static Closures Are Cached And Reused","description":"A `static` closure that captures nothing, no `use()` variables, no `$this`, is a stateless closure.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticClosureIdentityCaching86.html","inLanguage":"en","dateModified":"2026-09-06T08:47:49+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Stateless Static Closures Are Cached And Reused"}]}}</script>

A `static` closure that captures nothing, no `use()` variables, no `$this`, is a stateless closure. Until PHP 8.6, each evaluation of such a closure literal created a brand new `Closure` object, so two closures built from the exact same code were never identical. In PHP 8.6, the engine creates the object once and reuses it on every subsequent evaluation, so two stateless static closures built from the same code are now the same object.

## PHP code
```php
<?php

function make() {
    return static function () {
        return 1;
    };
}

var_dump(make() === make());

?>
```
## Before
```text
bool(false)
```
## After
```text
bool(true)
```
## PHP version change
This behavior changed in 8.6.

## See Also

- [Closures](https://www.php.net/manual/en/class.closure.php)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Extension