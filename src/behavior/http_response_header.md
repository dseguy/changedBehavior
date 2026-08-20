# $http_response_header Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/http_response_header.html","headline":"$http_response_header Is Deprecated","name":"$http_response_header Is Deprecated","description":"The $http_response_header PHP variable is deprecated.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/http_response_header.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"$http_response_header Is Deprecated"}]}}</script>

The $http_response_header PHP variable is deprecated. It should be replaced with a call to http_get_last_response_headers(), which is available since PHP 8.4.

## PHP code

```php
<?php

function get_contents() {
  file_get_contents("https://www.php.net/");
  var_dump($http_response_header); // variable is populated in the local scope
}
get_contents();

?>
```

## Before

```text
array(13) {
  [0]=>
  string(15) "HTTP/1.1 200 OK" 
  [1]=>
  string(17) "Server: myracloud" 
  [2]=>
  string(35) "Date: Wed, 22 Oct 2025 18:16:26 GMT" 
  [3]=>
  string(38) "Content-Type: text/html; charset=utf-8" 
  [4]=>
  string(17) "Connection: close" 
  [5]=>
  string(44) "Last-Modified: Wed, 22 Oct 2025 18:10:19 GMT" 
  [6]=>
  string(20) "Content-language: en" 
  [7]=>
  string(38) "Permissions-Policy: interest-cohort=()" 
  [8]=>
  string(27) "X-Frame-Options: SAMEORIGIN" 
  [9]=>
  string(114) "Set-Cookie: LAST_NEWS=1761156986; expires=Thu, 22 Oct 2026 18:16:26 GMT; Max-Age=31536000; path=/; domain=.php.net" 
  [10]=>
  string(47) "Link: <https://www.php.net/index>; rel=shorturl" 
  [11]=>
  string(38) "Expires: Wed, 22 Oct 2025 18:16:26 GMT" 
  [12]=>
  string(24) "Cache-Control: max-age=0" 
}
```

## After

```text
PHP Deprecated:  The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead

Deprecated: The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead
array(13) {
  [0]=>
  string(15) "HTTP/1.1 200 OK" 
  [1]=>
  string(17) "Server: myracloud" 
  [2]=>
  string(35) "Date: Wed, 22 Oct 2025 18:16:26 GMT" 
  [3]=>
  string(38) "Content-Type: text/html; charset=utf-8" 
  [4]=>
  string(17) "Connection: close" 
  [5]=>
  string(44) "Last-Modified: Wed, 22 Oct 2025 18:10:19 GMT" 
  [6]=>
  string(20) "Content-language: en" 
  [7]=>
  string(38) "Permissions-Policy: interest-cohort=()" 
  [8]=>
  string(27) "X-Frame-Options: SAMEORIGIN" 
  [9]=>
  string(114) "Set-Cookie: LAST_NEWS=1761156986; expires=Thu, 22 Oct 2026 18:16:26 GMT; Max-Age=31536000; path=/; domain=.php.net" 
  [10]=>
  string(47) "Link: <https://www.php.net/index>; rel=shorturl" 
  [11]=>
  string(38) "Expires: Wed, 22 Oct 2025 18:16:26 GMT" 
  [12]=>
  string(24) "Cache-Control: max-age=0" 
}
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead](https://php-errors.readthedocs.io/en/latest/messages/the-predefined-locally-scoped-%24http_response_header-variable-is-deprecated%2C.html)
