# Session Cookies Default To Secure Settings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sessionSecurityDefaults.html","headline":"Session Cookies Default To Secure Settings","name":"Session Cookies Default To Secure Settings","description":"The built-in defaults of three session INI settings changed to provide secure behavior out of the box: `session.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sessionSecurityDefaults.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Session Cookies Default To Secure Settings"}]}}</script>

The built-in defaults of three session INI settings changed to provide secure behavior out of the box: `session.use_strict_mode` is now `1` (was `0`), `session.cookie_httponly` is now `1` (was `0`), and `session.cookie_samesite` is now `Lax` (was unset). Applications that relied on the old permissive defaults, such as accepting externally supplied session IDs, reading the session cookie from JavaScript, or sending it on cross-site POST requests, must now set these directives explicitly.

## PHP code

```php
<?php

$out = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg('var_dump(ini_get("session.use_strict_mode"), ini_get("session.cookie_httponly"), ini_get("session.cookie_samesite"));'));
echo $out;

?>
```

## Before

```text
string(1) 0
string(1) 0
string(0) 
```

## After

```text
string(1) 1
string(1) 1
string(3) Lax
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [Session security defaults RFC](https://wiki.php.net/rfc/session_security_defaults)
