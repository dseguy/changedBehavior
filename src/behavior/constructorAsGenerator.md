# Making A Constructor A Generator Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constructorAsGenerator.html","headline":"Making A Constructor A Generator Is Deprecated","name":"Making A Constructor A Generator Is Deprecated","description":"Using `yield` anywhere in the body of `__construct()` turns it into a Generator function.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constructorAsGenerator.html","inLanguage":"en","dateModified":"2026-08-28T19:03:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Making A Constructor A Generator Is Deprecated"}]}}</script>

Using `yield` anywhere in the body of `__construct()` turns it into a Generator function. Because a Generator's body only starts running once it is iterated, and nothing iterates a constructor, the code inside such a constructor never runs when the object is created with `new`: initialization is silently skipped. Since this pattern is virtually always a mistake, PHP 8.6 deprecates making a constructor a Generator.

## PHP code

```php
<?php

class X {
    public function __construct() {
        yield 1;
    }
}

new X;

?>
```

## Before

```text

```

## After

```text
PHP Deprecated:  Making a constructor a Generator is deprecated in /codes/constructorAsGenerator.php on line 4

Deprecated: Making a constructor a Generator is deprecated in /codes/constructorAsGenerator.php on line 4
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in 8.6.

## See Also

- [Generator overview](https://www.php.net/manual/en/language.generators.overview.php)
- [Constructors and destructors](https://www.php.net/manual/en/language.oop5.decon.php)

## Error Messages

- [0](https://php-errors.readthedocs.io/en/latest/messages/making-a-constructor-a-generator-is-deprecated.html)
