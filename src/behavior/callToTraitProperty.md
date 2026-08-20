# Accessing Directly Properties In Trait

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/callToTraitProperty.html","headline":"Accessing Directly Properties In Trait","name":"Accessing Directly Properties In Trait","description":"I was possible, though deprecated, to manipulate directly trait properties: the static properties.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/callToTraitProperty.html","inLanguage":"en","dateModified":"2026-08-20T16:09:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Accessing Directly Properties In Trait"}]}}</script>

I was possible, though deprecated, to manipulate directly trait properties: the static properties. 



Since traits only make sense as a part of a class, this operation is now forbidden.



Accessing static methods are also forbidden. Accessing trait constants is also forbidden, although constants in traits were introduced in PHP 8.3.

## PHP code

```php
<?php

trait T {
    public static $P = 1;
    
}

echo T::$P;

?>
```

## Before

```text
1
```

## After

```text
PHP Deprecated:  Accessing static trait property t::$P is deprecated, it should only be accessed on a class using the trait

Deprecated: Accessing static trait property t::$P is deprecated, it should only be accessed on a class using the trait
1
```

## PHP version change

This behavior was deprecated in 8.0.

This behavior changed in 8.1.

## Error Messages

- [Accessing static trait property %s::%s is deprecated, it should only be accessed on a class using the trait](https://php-errors.readthedocs.io/en/latest/messages/accessing-static-trait-property-%25s%3A%3A%24%25s-is-deprecated.html)

## Analyzer

- [Traits/CannotCallTraitStaticProperty](https://exakat.readthedocs.io/en/latest/Reference/Rules/Traits/CannotCallTraitStaticProperty.html)
