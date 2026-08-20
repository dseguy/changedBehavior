# get_defined_functions() Doesn't Exclude Diabled Functions Anymore

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_defined_functions.html","headline":"get_defined_functions() Doesn't Exclude Diabled Functions Anymore","name":"get_defined_functions() Doesn't Exclude Diabled Functions Anymore","description":"get_defined_functions() used to have one parameter, called `$exclude_disabled`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_defined_functions.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"get_defined_functions() Doesn't Exclude Diabled Functions Anymore"}]}}</script>

get_defined_functions() used to have one parameter, called `$exclude_disabled`. It used to exclude functions appearing under the directive `disabled_functions`. 



Since PHP 8.0, this parameter is not used anymore. It emits a warning since PHP 8.5.

## PHP code

```php
<?php

print_r(get_defined_functions(true));

?>
```

## Before

```text
Array
(
    [internal] => Array
        (
            [0] => exit
            [1] => die
            [2] => zend_version
            // many more functions
        )

    [user] => Array
        (
        )

)
```

## After

```text
PHP Deprecated:  get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0 in /codes/get_defined_functions.php on line 3

Deprecated: get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0 in /codes/get_defined_functions.php on line 3
Array
(
    [internal] => Array
        (
            [0] => clone
            [1] => exit
            [2] => die
            [3] => zend_version
            // many more functions
        )

    [user] => Array
        (
        )

)
```

## PHP version change

This behavior changed in 8.5.
