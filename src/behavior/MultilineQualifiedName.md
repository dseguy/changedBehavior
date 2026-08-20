# No New Line In Namespaces

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/MultilineQualifiedName.html","headline":"No New Line In Namespaces","name":"No New Line In Namespaces","description":"It was possible to use new lines inside a namespace: they would be removed at execution time, to build the actual namespace.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/MultilineQualifiedName.html","inLanguage":"en","dateModified":"2026-08-20T16:09:40+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No New Line In Namespaces"}]}}</script>

It was possible to use new lines inside a namespace: they would be removed at execution time, to build the actual namespace. 



Since PHP 8.0, it is not allowed anymore.

## PHP code

```php
<?php

// constant
    \A 
                           \B 
                           \C
                           ;

// type
    function foo() : \A 
                           \B 
                           \C
                           {}

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected ';', expecting '{' 

Parse error: syntax error, unexpected ';', expecting '{' 
```

## After

```text
PHP Parse error:  syntax error, unexpected fully qualified name \B

Parse error: syntax error, unexpected fully qualified name \B 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected ';', expecting '{'](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3B%27%2C-expecting-%27%7B%27.html)
- [syntax error, unexpected fully qualified name "\B" ](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25s%22.html)
