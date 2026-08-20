# array_change_key_case() Validates Its Case Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayChangeKeyCaseValueError.html","headline":"array_change_key_case() Validates Its Case Argument","name":"array_change_key_case() Validates Its Case Argument","description":"`array_change_key_case()` accepts a second argument, either `CASE_LOWER` or `CASE_UPPER`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/arrayChangeKeyCaseValueError.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array_change_key_case() Validates Its Case Argument"}]}}</script>

`array_change_key_case()` accepts a second argument, either `CASE_LOWER` or `CASE_UPPER`. Until PHP 8.6, any other value was silently treated as `CASE_LOWER`. In PHP 8.6, an invalid value throws a `ValueError`.

## PHP code

```php
<?php

var_dump(array_change_key_case(['A' => 1], 99));

?>
```

## Before

```text
array(1) {
  [A]=>
  int(1)
}
```

## After

```text
array_change_key_case(): Argument #2 ($case) must be either CASE_LOWER or CASE_UPPER
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [array_change_key_case()](https://www.php.net/array_change_key_case)

## Error Messages

- [array_change_key_case(): Argument #2 ($case) must be either CASE_LOWER or CASE_UPPER](https://php-errors.readthedocs.io/en/latest/messages/array_change_key_case%28%29%3A-argument-%232-%28%24case%29-must-be-either-case_lower-or-case_upper.html)
