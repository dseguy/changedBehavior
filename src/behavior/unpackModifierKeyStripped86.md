# unpack() Strips Endianness Modifiers From The Result Key

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unpackModifierKeyStripped86.html","headline":"unpack() Strips Endianness Modifiers From The Result Key","name":"unpack() Strips Endianness Modifiers From The Result Key","description":"`unpack()` format codes accept an endianness modifier, such as `<` for little-endian or `>` for big-endian, directly after the type code.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unpackModifierKeyStripped86.html","inLanguage":"en","dateModified":"2026-09-06T08:47:53+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"unpack() Strips Endianness Modifiers From The Result Key"}]}}</script>

`unpack()` format codes accept an endianness modifier, such as `<` for little-endian or `>` for big-endian, directly after the type code. Until PHP 8.6, a modifier placed right before the slash-separated key, such as `s<value`, was not recognized as a modifier there and was kept as part of the resulting array key, so the key became `<value` instead of `value`. In PHP 8.6, the modifier is recognized and stripped in that position too, so the key is the clean `value`.

## PHP code
```php
<?php

var_dump(unpack("s<value", pack("s", 5)));

?>
```
## Before
```text
array(1) {
  ["<value"]=>
  int(5)
}
```
## After
```text
array(1) {
  ["value"]=>
  int(5)
}
```
## PHP version change
This behavior changed in 8.6.

## See Also

- [unpack()](https://www.php.net/unpack)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Extension