# Indirect Modification In Clone

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/indirectModificationInClone.html","headline":"Indirect Modification In Clone","name":"Indirect Modification In Clone","description":"__clone is used to apply modifications during the cloning operation.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/indirectModificationInClone.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Indirect Modification In Clone"}]}}</script>

__clone is used to apply modifications during the cloning operation. It could also be used to change the original object.

## PHP code

```php
<?php

class X {
    readonly public int $p;
    
    function foo() {
        $this->p = 2;
    }
    
    function __clone() {
        $ref = &$this->p;
    }
}

$x = new x;
clone $x;

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected identifier "readonly", expecting "function" or "const" 

Parse error: syntax error, unexpected identifier "readonly", expecting "function" or "const" 
```

## After

```text
PHP Fatal error:  Uncaught Error: Cannot indirectly modify readonly property X::$p

Fatal error: Uncaught Error: Cannot indirectly modify readonly property X::$p
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Cannot indirectly modify readonly property X::$p](https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-property-%25s%3A%3A%24%25s.html)
- [Csyntax error, unexpected identifier "readonly", expecting "function" or "const"](https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-property-%25s%3A%3A%24%25s.html)
