# Making A Destructor A Generator Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/destructorAsGenerator.html","headline":"Making A Destructor A Generator Is Deprecated","name":"Making A Destructor A Generator Is Deprecated","description":"Using `yield` anywhere in the body of `__destruct()` turns it into a Generator function.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/destructorAsGenerator.html","inLanguage":"en","dateModified":"2026-08-24T09:28:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Making A Destructor A Generator Is Deprecated"}]}}</script>

Using `yield` anywhere in the body of `__destruct()` turns it into a Generator function. A Generator only starts executing once something iterates it, but nothing iterates the return value of a destructor: PHP just calls it during garbage collection and discards the result. As a consequence, the body of such a destructor never actually runs, silently skipping any cleanup code it contains. Since this pattern is virtually always a mistake, PHP 8.6 deprecates making a destructor a Generator.

## PHP code

```php
<?php

class X {
    public function __destruct() {
        yield 1;
    }
}

$x = new X;
unset($x);

?>
```

## Before

```text

```

## After

```text
PHP Deprecated:  Making a destructor a Generator is deprecated in /codes/destructorAsGenerator.php on line 4

Deprecated: Making a destructor a Generator is deprecated in /codes/destructorAsGenerator.php on line 4
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in 8.6.

## See Also

- [Generator overview](https://www.php.net/manual/en/language.generators.overview.php)
- [Constructors and destructors](https://www.php.net/manual/en/language.oop5.decon.php)

## Error Messages

- [0](https://php-errors.readthedocs.io/en/latest/messages/making-a-destructor-a-generator-is-deprecated.html)
