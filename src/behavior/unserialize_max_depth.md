# unserialize() `max_depth` Option

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_max_depth.html","headline":"unserialize() `max_depth` Option","name":"unserialize() `max_depth` Option","description":"unserialize() has now an option to limit the depth of nesting in the decoded structure.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_max_depth.html","inLanguage":"en","dateModified":"2026-02-06T21:27:21+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"unserialize() `max_depth` Option"}]}}</script>

unserialize() has now an option to limit the depth of nesting in the decoded structure. When that limit is reached, serialize() emits a warning, and stops processing the string. This is a security option, that prevents deep nested structures to be created and consume a lot of memory and processing power.

## PHP code

```php
<?php

// 4 levels of nesting
$a = [[[[]]]];

$b = serialize($a);

print_r(unserialize($b, ['max_depth' => 2]));

?>
```

## Before

```text
Array
(
    [0] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                        )

                )

        )

)
```

## After

```text
PHP Warning:  unserialize(): Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option or the unserialize_max_depth ini setting

Warning: unserialize(): Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option or the unserialize_max_depth ini setting
PHP Warning:  unserialize(): Error at offset 23 of 36 bytes

Warning: unserialize(): Error at offset 23 of 36 bytes
```

## PHP version change

This behavior changed in 7.4.

## See Also

- [unserialize()](https://www.php.net/manual/fr/function.unserialize.php)

## Error Messages

- [Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option](https://php-errors.readthedocs.io/en/latest/messages/maximum-depth-of-%25d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize%28%29-option.html)
