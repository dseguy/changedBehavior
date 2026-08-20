# __debugInfo() Nullable Return Type Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/debugInfoNullableDeprecated.html","headline":"__debugInfo() Nullable Return Type Is Deprecated","name":"__debugInfo() Nullable Return Type Is Deprecated","description":"The magic method `__debugInfo()` used to be freely typed to return `.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/debugInfoNullableDeprecated.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"__debugInfo() Nullable Return Type Is Deprecated"}]}}</script>

The magic method `__debugInfo()` used to be freely typed to return `?array`, since `null` and `array` were both acceptable return values. In PHP 8.6, simply declaring `__debugInfo()` with a nullable `?array` return type is deprecated, regardless of what is actually returned: the return type should be made non-nullable, and an empty array should be returned instead of `null`.

## PHP code

```php
<?php

class x {
    public function __debugInfo(): ?array {
        return ['a' => 1];
    }
}

var_dump(new x());

?>
```

## Before

```text
object(x)#1 (1) {
  [a]=>
  int(1)
}
```

## After

```text
PHP Deprecated:  Returning null from x::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead

Deprecated: Returning null from x::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead
object(x)#1 (1) {
  [a]=>
  int(1)
}
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Returning null from %s::__debugInfo() is deprecated, return an empty array instead](https://php-errors.readthedocs.io/en/latest/messages/returning-null-from-%25s%3A%3A__debuginfo%28%29-is-deprecated%2C-return-an-empty-array-instead.html)
