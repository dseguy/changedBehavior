# No Case With A Semi-colon

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/case-with-semicolon.html","headline":"No Case With A Semi-colon","name":"No Case With A Semi-colon","description":"It was little known that one could use a semi-colon `.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/case-with-semicolon.html","inLanguage":"en","dateModified":"2025-10-31T16:52:55+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No Case With A Semi-colon"}]}}</script>

It was little known that one could use a semi-colon `;` in a case entry, instead of a colon `:`. Both would act as a delimiter between the case value and the actualy case block.



Since PHP 8.5, it is forbidden.

## PHP code

```php
<?php

$a = 1;
switch ($a) {
    case 1; 
    echo 2;
     break;
}

?>
```

## Before

```text
2
```

## After

```text
PHP Deprecated:  Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead

Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead
2
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead](https://php-errors.readthedocs.io/en/latest/messages/case-statements-followed-by-a-semicolon-%28%3B%29-are-deprecated%2C-use-a-colon-%28%3A%29.html)
