# Spaces In Namespaces

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/spaces_in_namespaces.html","headline":"Spaces In Namespaces","name":"Spaces In Namespaces","description":"It used to be valid syntax to have a new line or a space in a namespace name.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/spaces_in_namespaces.html","inLanguage":"en","dateModified":"2026-02-25T23:40:35+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Spaces In Namespaces"}]}}</script>

It used to be valid syntax to have a new line or a space in a namespace name. This is not the case in PHP 8.0 anymore.

## PHP code

```php
<?php

namespace Vendor
\Package;

echo 1;

?>
```

## Before

```text
1
```

## After

```text
PHP Parse error:  syntax error, unexpected fully qualified name "\Package", expecting "{" 

Parse error: syntax error, unexpected fully qualified name "\Package", expecting "{" 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected fully qualified name "\Package", expecting "{"](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25s%22%2C-expecting-%22%7B%22.html)
