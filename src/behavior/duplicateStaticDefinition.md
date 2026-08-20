# Duplicate Static Definition

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/duplicateStaticDefinition.html","headline":"Duplicate Static Definition","name":"Duplicate Static Definition","description":"PHP reports when the same static variable has been declared twice in the same context.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/duplicateStaticDefinition.html","inLanguage":"en","dateModified":"2026-01-20T06:24:32+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Duplicate Static Definition"}]}}</script>

PHP reports when the same static variable has been declared twice in the same context.

## PHP code

```php
<?php

namespace A { 
	function foo() {
        static $s;
        $s = 1;

        static $s;
        echo $s;
    }
}

?>
```

## Before

```text
11
```

## After

```text
Duplicate declaration of static variable $s
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Duplicate declaration of static variable $%s](https://php-errors.readthedocs.io/en/latest/messages/duplicate-declaration-of-static-variable-%24%25s.html)

## Analyzer

- [Variables/RedeclaredStaticVariable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Variables/RedeclaredStaticVariable.html)
