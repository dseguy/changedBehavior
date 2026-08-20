# Interface Imported Constant Visibility Is Checked

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constantFromInterfaceVisibilityCheck.html","headline":"Interface Imported Constant Visibility Is Checked","name":"Interface Imported Constant Visibility Is Checked","description":"Constant and methods visibility must be public when they are defined in an interface.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constantFromInterfaceVisibilityCheck.html","inLanguage":"en","dateModified":"2025-09-13T09:07:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Interface Imported Constant Visibility Is Checked"}]}}</script>

Constant and methods visibility must be public when they are defined in an interface. When they are implemented in a class, they also need to be public. Until PHP 8.3, this was silently ignored, and made public. 

## PHP code

```php
<?php

interface i {
    public const IPrivate   = 'private';
    public const IProtected = 'protected';
    public const IPublic    = 'public';
}

class x implements i {
    private const IPri = 1;
    protected const IPro = 2;
    public const IPub = 3;
}

echo x::IPrivate . PHP_EOL;
echo x::IProtected . PHP_EOL;
echo x::IPublic . PHP_EOL;

?>
```

## Before

```text
3
```

## After

```text
PHP Fatal error:  Access level to x::IPri must be public (as in interface i)
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Access level to x::IPri must be public (as in interface i)](https://php-errors.readthedocs.io/en/latest/messages/access-level-to-%25s%3A%3A%25s-must-be-%25s-%28as-in-%25s-%25s%29%25s.html)
