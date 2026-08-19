.. _sodium_crypto_pwhash_str()-throws-valueerror-for-out-of-range-limits:

sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits
====================================================================
.. meta::
	:description:
		sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits: The password-hashing functions ``sodium_crypto_pwhash()``, ``sodium_crypto_pwhash_str()``, ``sodium_crypto_pwhash_scryptsalsa208sha256()`` and ``sodium_crypto_pwhash_scryptsalsa208sha256_str()`` validate their ``$opslimit`` and ``$memlimit`` arguments against libsodium's documented minimums.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits
	:twitter:description: sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits: The password-hashing functions ``sodium_crypto_pwhash()``, ``sodium_crypto_pwhash_str()``, ``sodium_crypto_pwhash_scryptsalsa208sha256()`` and ``sodium_crypto_pwhash_scryptsalsa208sha256_str()`` validate their ``$opslimit`` and ``$memlimit`` arguments against libsodium's documented minimums
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits
	:og:type: article
	:og:description: The password-hashing functions ``sodium_crypto_pwhash()``, ``sodium_crypto_pwhash_str()``, ``sodium_crypto_pwhash_scryptsalsa208sha256()`` and ``sodium_crypto_pwhash_scryptsalsa208sha256_str()`` validate their ``$opslimit`` and ``$memlimit`` arguments against libsodium's documented minimums
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sodiumPwhashValueError86.html
	:og:locale: en

The password-hashing functions ``sodium_crypto_pwhash()``, ``sodium_crypto_pwhash_str()``, ``sodium_crypto_pwhash_scryptsalsa208sha256()`` and ``sodium_crypto_pwhash_scryptsalsa208sha256_str()`` validate their ``$opslimit`` and ``$memlimit`` arguments against libsodium's documented minimums. Until PHP 8.6, an out-of-range value threw a ``SodiumException``. In PHP 8.6, it throws a ``ValueError`` instead, which better reflects that the problem is an invalid argument rather than an internal libsodium failure. ``SodiumException`` is still thrown for genuine libsodium failures.

PHP code
________
.. code-block:: php

   <?php
   
   try {
       $hash = sodium_crypto_pwhash_str('password', 1, 1);
       var_dump($hash);
   } catch (\ValueError $e) {
       echo "ValueError: ".$e->getMessage()."\n";
   } catch (\SodiumException $e) {
       echo "SodiumException: ".$e->getMessage()."\n";
   }
   
   ?>
   

Before
______
.. code-block:: output

   SodiumException: sodium_crypto_pwhash_str(): Argument #3 ($memlimit) must be greater than or equal to 8192
   

After
______
.. code-block:: output

   ValueError: sodium_crypto_pwhash_str(): Argument #3 ($memlimit) must be greater than or equal to 8192
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `sodium_crypto_pwhash_str() <https://www.php.net/sodium_crypto_pwhash_str>`_


Error Messages
______________

  + `sodium_crypto_pwhash_str(): Argument #3 ($memlimit) must be greater than or equal to 8192 <https://php-errors.readthedocs.io/en/latest/messages/sodium_crypto_pwhash_str%28%29-throws-valueerror-for-out-of-range-limits.html>`_



