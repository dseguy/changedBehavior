# Die And Exit As Functions

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/die-exit-functions.html","headline":"Die And Exit As Functions","name":"Die And Exit As Functions","description":"Die and Exit used to be language constructs, a special kind of PHP instructions.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/die-exit-functions.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Die And Exit As Functions"}]}}</script>

Die and Exit used to be language constructs, a special kind of PHP instructions. As such, they had special abilities and behaviors: in particular, it meant that they could not be called dynamically, with their name in a string. Since PHP 8.4, this is possible.

## PHP code

```php
<?php

	//Uncaught Error: Call to undefined function \exit()
    $s = 'exit';
    $s('Exit');

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Call to undefined function exit()
```

## After

```text
Exit
```

## PHP version change

This behavior changed in 8.4.

## See Also

- [exit](https://www.php.net/manual/en/function.exit.php)

## Error Messages

- [Call to undefined function exit()](https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-exit%28%29.html)
