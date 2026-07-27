.. _session-cookies-default-to-secure-settings:

Session Cookies Default To Secure Settings
==========================================
.. meta::
	:description:
		Session Cookies Default To Secure Settings: The built-in defaults of three session INI settings changed to provide secure behavior out of the box: ``session.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Session Cookies Default To Secure Settings
	:twitter:description: Session Cookies Default To Secure Settings: The built-in defaults of three session INI settings changed to provide secure behavior out of the box: ``session
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: Session Cookies Default To Secure Settings
	:og:type: article
	:og:description: The built-in defaults of three session INI settings changed to provide secure behavior out of the box: ``session
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sessionSecurityDefaults.html
	:og:locale: en

The built-in defaults of three session INI settings changed to provide secure behavior out of the box: ``session.use_strict_mode`` is now ``1`` (was ``0``), ``session.cookie_httponly`` is now ``1`` (was ``0``), and ``session.cookie_samesite`` is now ``Lax`` (was unset). Applications that relied on the old permissive defaults, such as accepting externally supplied session IDs, reading the session cookie from JavaScript, or sending it on cross-site POST requests, must now set these directives explicitly.

PHP code
________
.. code-block:: php

   <?php
   
   $out = shell_exec(PHP_BINARY . ' -n -r ' . escapeshellarg('var_dump(ini_get("session.use_strict_mode"), ini_get("session.cookie_httponly"), ini_get("session.cookie_samesite"));'));
   echo $out;
   
   ?>
   

Before
______
.. code-block:: output

   string(1) 0
   string(1) 0
   string(0) 
   

After
______
.. code-block:: output

   string(1) 1
   string(1) 1
   string(3) Lax
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `Session security defaults RFC <https://wiki.php.net/rfc/session_security_defaults>`_



