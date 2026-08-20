# Relaxed Naming With Class Constant

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/relaxed_private.html","headline":"Relaxed Naming With Class Constant","name":"Relaxed Naming With Class Constant","description":"Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the `$` has allowed it for a long time).","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/relaxed_private.html","inLanguage":"en","dateModified":"2026-02-25T23:42:53+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Relaxed Naming With Class Constant"}]}}</script>

Relaxed naming is the possibility to use PHP keywords as method or class constant names (for properties, the `$` has allowed it for a long time).



`private`, `protected` and `public` were not valid class constant names, until PHP 8.3. They were eligible to be method names, though.

## PHP code

```php
<?php

class x {
    public const string private = 'protected';
}

echo x::private;

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected token "private", expecting "=" 

Parse error: syntax error, unexpected token "private", expecting "=" 
```

## After

```text
protected
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [syntax error, unexpected token "private", expecting "="](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22private%22%2C-expecting-%22%3D%22.html)
