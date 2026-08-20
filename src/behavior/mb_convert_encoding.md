# mb_convert_encoding() Has Deprecated Formats

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_convert_encoding.html","headline":"mb_convert_encoding() Has Deprecated Formats","name":"mb_convert_encoding() Has Deprecated Formats","description":"4 previous formats have been removed from `mb_convert_encoding()` options: `uuencode`, `base64`, `qprint`, `html`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_convert_encoding.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"mb_convert_encoding() Has Deprecated Formats"}]}}</script>

4 previous formats have been removed from `mb_convert_encoding()` options: `uuencode`, `base64`, `qprint`, `html`. 



They are all handled by dedicated PHP functions, which should be used instead of this one. 

## PHP code

```php
<?php

echo mb_convert_encoding('foo', 'uuencode');
echo mb_convert_encoding('foo', 'base64');
echo mb_convert_encoding('foo', 'qprint');
echo mb_convert_encoding('foo', 'html');

?>
```

## Before

```text
Zm9vfoofoo
```

## After

```text
PHP Deprecated:  mb_convert_encoding(): Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead 

Deprecated: mb_convert_encoding(): Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead 
begin 0644 filename
#9F]O
PHP Deprecated:  mb_convert_encoding(): Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead 

Deprecated: mb_convert_encoding(): Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead 
Zm9vPHP Deprecated:  mb_convert_encoding(): Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead 

Deprecated: mb_convert_encoding(): Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead 
fooPHP Deprecated:  mb_convert_encoding(): Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead 

Deprecated: mb_convert_encoding(): Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead 
foo
```

## PHP version change

This behavior was deprecated in 8.2.

This behavior changed in 8.2.

## Error Messages

- [Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead](https://php-errors.readthedocs.io/en/latest/messages/handling-base64-via-mbstring-is-deprecated%3B-use-base64_encode-base64_decode-instead.html)
- [Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead](https://php-errors.readthedocs.io/en/latest/messages/handling-html-entities-via-mbstring-is-deprecated%3B-use-htmlspecialchars%2C-htmlentities%2C-or-mb_encode_numericentity-mb_decode_numericentity.html)
- [Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead](https://php-errors.readthedocs.io/en/latest/messages/handling-qprint-via-mbstring-is-deprecated%3B-use-quoted_printable_encode-quoted_printable_decode.html)
- [Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead](https://php-errors.readthedocs.io/en/latest/messages/handling-uuencode-via-mbstring-is-deprecated%3B-use-convert_uuencode-convert_uudecode-instead.html)
