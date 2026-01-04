.. _`$http_response_header-is-deprecated`:

$http_response_header Is Deprecated
===================================
.. meta::
	:description:
		$http_response_header Is Deprecated: The $http_response_header PHP variable is deprecated.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $http_response_header Is Deprecated
	:twitter:description: $http_response_header Is Deprecated: The $http_response_header PHP variable is deprecated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: $http_response_header Is Deprecated
	:og:type: article
	:og:description: The $http_response_header PHP variable is deprecated
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/http_response_header.html
	:og:locale: en

The $http_response_header PHP variable is deprecated. It should be replaced with a call to http_get_last_response_headers(), which is available since PHP 8.4.

PHP code
________
.. code-block:: php

   <?php
   
   function get_contents() {
     file_get_contents(https://www.php.net/);
     var_dump($http_response_header); // variable is populated in the local scope
   }
   get_contents();
   
   ?>

Before
______
.. code-block:: output

   array(13) {
     [0]=>
     string(15) HTTP/1.1 200 OK
     [1]=>
     string(17) Server: myracloud
     [2]=>
     string(35) Date: Wed, 22 Oct 2025 18:16:26 GMT
     [3]=>
     string(38) Content-Type: text/html; charset=utf-8
     [4]=>
     string(17) Connection: close
     [5]=>
     string(44) Last-Modified: Wed, 22 Oct 2025 18:10:19 GMT
     [6]=>
     string(20) Content-language: en
     [7]=>
     string(38) Permissions-Policy: interest-cohort=()
     [8]=>
     string(27) X-Frame-Options: SAMEORIGIN
     [9]=>
     string(114) Set-Cookie: LAST_NEWS=1761156986; expires=Thu, 22 Oct 2026 18:16:26 GMT; Max-Age=31536000; path=/; domain=.php.net
     [10]=>
     string(47) Link: <https://www.php.net/index>; rel=shorturl
     [11]=>
     string(38) Expires: Wed, 22 Oct 2025 18:16:26 GMT
     [12]=>
     string(24) Cache-Control: max-age=0
   }
   

After
______
.. code-block:: output

   PHP Deprecated:  The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead
   
   Deprecated: The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead
   array(13) {
     [0]=>
     string(15) HTTP/1.1 200 OK
     [1]=>
     string(17) Server: myracloud
     [2]=>
     string(35) Date: Wed, 22 Oct 2025 18:16:26 GMT
     [3]=>
     string(38) Content-Type: text/html; charset=utf-8
     [4]=>
     string(17) Connection: close
     [5]=>
     string(44) Last-Modified: Wed, 22 Oct 2025 18:10:19 GMT
     [6]=>
     string(20) Content-language: en
     [7]=>
     string(38) Permissions-Policy: interest-cohort=()
     [8]=>
     string(27) X-Frame-Options: SAMEORIGIN
     [9]=>
     string(114) Set-Cookie: LAST_NEWS=1761156986; expires=Thu, 22 Oct 2026 18:16:26 GMT; Max-Age=31536000; path=/; domain=.php.net
     [10]=>
     string(47) Link: <https://www.php.net/index>; rel=shorturl
     [11]=>
     string(38) Expires: Wed, 22 Oct 2025 18:16:26 GMT
     [12]=>
     string(24) Cache-Control: max-age=0
   }
   


PHP version change
__________________
This behavior changed in 8.5



