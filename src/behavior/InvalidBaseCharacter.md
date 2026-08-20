# Base Conversion Reports Invalid Characters

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/InvalidBaseCharacter.html","headline":"Base Conversion Reports Invalid Characters","name":"Base Conversion Reports Invalid Characters","description":"The base conversion functions, such as octdec(), base_convert(), binhex() or hexdex() used to ignore silently invalid characters.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/InvalidBaseCharacter.html","inLanguage":"en","dateModified":"2025-08-30T20:57:40+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Base Conversion Reports Invalid Characters"}]}}</script>

The base conversion functions, such as octdec(), base_convert(), binhex() or hexdex() used to ignore silently invalid characters. Invalid characters are the characters that do no belong to the base: for example, 2 or 3 in binary, or a in decimal, or g in hexadecimal.



The characters are still ignored, but they now raise a warning.



## PHP code

```php
<?php

print octdec('789');
print base_convert('123', 2, 10);
print bindec('a10');
print hexdec('defg');

?>
```

## Before

```text
7123567
```

## After

```text
PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored

Deprecated: Invalid characters passed for attempted conversion, these have been ignored
7PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored

Deprecated: Invalid characters passed for attempted conversion, these have been ignored
1PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored

Deprecated: Invalid characters passed for attempted conversion, these have been ignored
2PHP Deprecated:  Invalid characters passed for attempted conversion, these have been ignored

Deprecated: Invalid characters passed for attempted conversion, these have been ignored
3567
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Invalid characters passed for attempted conversion, these have been ignored](https://php-errors.readthedocs.io/en/latest/messages/invalid-characters-passed-for-attempted-conversion%2C-these-have-been-ignored.html)
