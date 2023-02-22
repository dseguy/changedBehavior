# PHP changed behavior database

Once in a version, PHP changes behavior of some of its commands. They are mentioned in the migration guides, and they are also collected here, with examples.

## Contribute

To contribute, create a PHP script which illustrates a PHP change of behavior. 
Run the code across various PHP versions, such as 7.2 to 8.3 : at least two different results should appear across those versions.
Add documentation for that code : description, extra blogs and tutorial, 
Send it as a PR.


The code should always display some result, and the result should change at least once across the current selection of supported PHP versions.

Supported PHP versions : 8.3-dev, 8.2, 8.1, 8.0, 7.4, 7.3.
You can also run the test suite on a minor version, though there are not plan to support them all. 

This project aims at documenting change in behavior, in particular when it is otherwise silent. For example, comparisons between integer and strings (PHP 8.0), or sort() handling of ex-aequos (PHP 7)

Documented changes in behavior are OK, but the edge cases are best. 

Avoid reporting behavior changes with : 

+ new functions, classes, interfaces, traits, etc. 
+ new or removed PHP keywords, as they are usually documented and easy to spot
+ new or removed PHP features