# __toString Can Throw Exceptions

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/toStringCanThrow.html","headline":"__toString Can Throw Exceptions","name":"__toString Can Throw Exceptions","description":"The magic method `__toString()` could not throw exception, in case of problem occurring during processing.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/toStringCanThrow.html","inLanguage":"en","dateModified":"2026-08-20T15:55:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"__toString Can Throw Exceptions"}]}}</script>

The magic method `__toString()` could not throw exception, in case of problem occurring during processing. 



Since PHP 7.4, it is possible.

## PHP code

```php
<?php

class X {
    function __toString() {
        throw new \Exception('error'.__METHOD__);
    }
}

(string) new X;

?>
```

## Before

```text
PHP Fatal error:  Method X::__toString() must not throw an exception, caught Exception: errorX::__toString

Fatal error: Method X::__toString() must not throw an exception, caught Exception: errorX::__toString
```

## After

```text
PHP Fatal error:  Uncaught Exception: errorX::__toString

Fatal error: Uncaught Exception: errorX::__toString
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Method %s::%s() must not throw an exception, caught %s](https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A__tostring%28%29-must-not-throw-an-exception%2C-caught-%25s%3A-%25s.html)

## Analyzer

- [Structures/toStringThrowsException](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/toStringThrowsException.html)
