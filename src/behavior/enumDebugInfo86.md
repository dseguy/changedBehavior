# Enums May Now Define __debugInfo()

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/enumDebugInfo86.html","headline":"Enums May Now Define __debugInfo()","name":"Enums May Now Define __debugInfo()","description":"Declaring the magic method `__debugInfo()` on an `enum` used to be a compile-time fatal error, because enum cases were treated like other magic methods that make no sense on enums.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/enumDebugInfo86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Enums May Now Define __debugInfo()"}]}}</script>

Declaring the magic method `__debugInfo()` on an `enum` used to be a compile-time fatal error, because enum cases were treated like other magic methods that make no sense on enums. In PHP 8.6, `__debugInfo()` is allowed on enums, so `var_dump()` can render a custom representation of an enum case instead of the default one.

## PHP code

```php
<?php

enum Suit {
    case Hearts;
    case Spades;

    public function __debugInfo(): array {
        return ['custom' => $this->name];
    }
}

var_dump(Suit::Hearts);

?>
```

## Before

```text
PHP Fatal error:  Enum Suit cannot include magic method __debugInfo in /codes/enumDebugInfo86.php on line 3
Stack trace:
#0 {main}

Fatal error: Enum Suit cannot include magic method __debugInfo in /codes/enumDebugInfo86.php on line 3
Stack trace:
#0 {main}
```

## After

```text
enum(Suit::Hearts) (1) {
  ["custom"]=>
  string(6) "Hearts" 
}
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [var_dump()](https://www.php.net/var_dump)
