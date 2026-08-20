# Returning A Value From A Constructor Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constructorReturnDeprecated.html","headline":"Returning A Value From A Constructor Is Deprecated","name":"Returning A Value From A Constructor Is Deprecated","description":"A constructor's return value was always ignored by PHP, silently.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constructorReturnDeprecated.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Returning A Value From A Constructor Is Deprecated"}]}}</script>

A constructor's return value was always ignored by PHP, silently. In PHP 8.6, returning any value, other than not returning at all, from `__construct()` emits a deprecation notice. The same applies to `__destruct()`.

## PHP code

```php
<?php

class x {
    public function __construct() {
        return 5;
    }
}

new x();
print "done\n";

?>
```

## Before

```text
done
```

## After

```text
PHP Deprecated:  Returning a value from a constructor is deprecated

Deprecated: Returning a value from a constructor is deprecated
done
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Returning a value from a constructor is deprecated](https://php-errors.readthedocs.io/en/latest/messages/returning-a-value-from-a-constructor-is-deprecated.html)
