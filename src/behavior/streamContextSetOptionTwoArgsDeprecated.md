# Calling stream_context_set_option() With 2 Arguments Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/streamContextSetOptionTwoArgsDeprecated.html","headline":"Calling stream_context_set_option() With 2 Arguments Is Deprecated","name":"Calling stream_context_set_option() With 2 Arguments Is Deprecated","description":"`stream_context_set_option()` accepted two call shapes: a 4-argument form setting a single `wrapper`/`option`/`value` triple, and a 2-argument form that instead took a whole nested `[\"wrapper\"][\"option\"] = value` array in place of the last three arguments.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/streamContextSetOptionTwoArgsDeprecated.html","inLanguage":"en","dateModified":"2026-09-09T15:23:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling stream_context_set_option() With 2 Arguments Is Deprecated"}]}}</script>

`stream_context_set_option()` accepted two call shapes: a 4-argument form setting a single `wrapper`/`option`/`value` triple, and a 2-argument form that instead took a whole nested `["wrapper"]["option"] = value` array in place of the last three arguments. PHP 8.3 added a dedicated `stream_context_set_options()` function for that array form. Until PHP 8.4, calling the 2-argument array form was completely silent. In PHP 8.4, it emits a deprecation notice in favor of the new function; the context is still updated exactly as before, and the call still returns true.

## PHP code
```php
<?php

$context = stream_context_create();
var_dump(stream_context_set_option($context, ['http' => ['method' => 'POST']]));
```
## Before
```text
bool(true)
```
## After
```text
PHP Deprecated:  Calling stream_context_set_option() with 2 arguments is deprecated, use stream_context_set_options() instead in /codes/streamContextSetOptionTwoArgsDeprecated.php on line 4

Deprecated: Calling stream_context_set_option() with 2 arguments is deprecated, use stream_context_set_options() instead in /codes/streamContextSetOptionTwoArgsDeprecated.php on line 4
bool(true)
```
## PHP version change
This behavior was deprecated in 8.4.

This behavior changed in .

## See Also

- [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)
- [stream_context_set_options()](https://www.php.net/manual/en/function.stream-context-set-options.php)

## Error Messages

- [Calling stream_context_set_option() with 2 arguments is deprecated, use stream_context_set_options() instead](https://php-errors.readthedocs.io/en/latest/messages/calling-stream_context_set_option%28%29-with-2-arguments-is-deprecated%2C.html)

## Extension
- [standard](../extension.md#standard)