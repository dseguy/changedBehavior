# Alias Replace Class

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/aliasReplace.html","headline":"Alias Replace Class","name":"Alias Replace Class","description":"When a class is defined before an alias, with `use`, it used to yield a fatal error.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/aliasReplace.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Alias Replace Class"}]}}</script>

When a class is defined before an alias, with `use`, it used to yield a fatal error. Since PHP 8.4, and when the alias is in a different block than the definition, it is possible to replace a class with another one. 



While the fatal error has been removed, it now means that a class, local to a namespace, is not always described by its relative name. The class is still distinguisable with its absolute name.

## PHP code

```php
<?php

namespace A {
        class xBefore {}
}

namespace A {
    use y as xAfter;
    use y as xBefore;
    class y {}

  print get_class(new y);    
}


namespace A {
        class xAfter {}
}

?>
```

## Before

```text
PHP Fatal error:  Cannot use y as xBefore because the name is already in use s/aliasReplace.php on line 10

Fatal error: Cannot use y as xBefore because the name is already in use s/aliasReplace.php on line 10
```

## After

```text
A\y
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Cannot use%s %s as %s because the name is already in use](https://php-errors.readthedocs.io/en/latest/messages/cannot-use%25s-%25s-as-%25s-because-the-name-is-already-in-use.html)
