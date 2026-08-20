# Final Method In Trait

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finalMethodInTrait.html","headline":"Final Method In Trait","name":"Final Method In Trait","description":"Trait methods can be named final, when importing them as a trait alias.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finalMethodInTrait.html","inLanguage":"en","dateModified":"2026-01-20T06:24:44+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Final Method In Trait"}]}}</script>

Trait methods can be named final, when importing them as a trait alias. It was explicitly forbidden until PHP 8.3. This has nothing to do with the final keyword.

## PHP code

```php
<?php

trait t {
    function foo() {}
}

trait t2 {
    function foo() {}
}

class A {
        use t, t2 { t::foo as final; }
}
?>
```

## Before

```text

```

## After

```text

```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Cannot use 'final' as method modifier](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27final%27-as-method-modifier.html)

## Analyzer

- [Traits/NoFinalAlias](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/NoFinalAlias.html)
