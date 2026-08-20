# func_get_arg() Changed Behavior

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/func_get_arg.html","headline":"func_get_arg() Changed Behavior","name":"func_get_arg() Changed Behavior","description":"`func_get_arg()` and `func_get_args()` used to report the calling value of the argument, until PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/func_get_arg.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"func_get_arg() Changed Behavior"}]}}</script>

`func_get_arg()` and `func_get_args()` used to report the calling value of the argument, until PHP 7. 



Since PHP 7, it is reporting the value of the argument at calling time, which may have been modified by a previous instruction. 



This code will display 1 in PHP 7, and 0 in PHP 5.

## PHP code

```php
<?php

function x($a) {
    print func_get_arg(0);  // 0 
    $a++;
    print func_get_arg(0);  // 1
}

x(0);
?>
```

## Before

```text
00
```

## After

```text
01
```

## PHP version change

This behavior changed in 7.2.
