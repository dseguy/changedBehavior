# Integer Regex With mb_ereg_replace()

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_ereg_replaceWithInteger.html","headline":"Integer Regex With mb_ereg_replace()","name":"Integer Regex With mb_ereg_replace()","description":"mb_ereg_replace() used to accept an integer as a regex.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_ereg_replaceWithInteger.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Integer Regex With mb_ereg_replace()"}]}}</script>

mb_ereg_replace() used to accept an integer as a regex. It would turn that integer into its equivalent ASCII character and use it as a regex. This behavior has been removed.



A similar change of behavior happened with `strpos()`.



## PHP code

```php
<?php

var_dump(mb_ereg_replace(98, 'Z', 'abc'));

?>
```

## Before

```text
PHP Deprecated:  mb_ereg_replace(): Non-string patterns will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior 

Deprecated: mb_ereg_replace(): Non-string patterns will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior 
string(3) "aZc" 
```

## After

```text
string(3) "abc" 
```

## PHP version change

This behavior changed in 8.0.
