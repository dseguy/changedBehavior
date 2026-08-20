# Introduction

PHP Changed Behaviors is a catalog of the ways PHP's behavior has changed from one version to the next.

Did you know that comparing a string to a number no longer works the way it used to? Or that constructors named after their class stopped being recognized? Or that array functions like `array_sum()` now reject non-numeric values instead of silently casting them?

For each behavior change, this catalog provides a short description, a "before" and "after" code example showing the difference, the PHP version where the change happened, and links to the resulting error messages and related static-analysis rules.

Some of these changes emit a clear deprecation or error message; others are silent, and only show up as a different result at runtime. Both kinds are tracked here, so that anyone upgrading a codebase - or reading someone else's - can understand what actually changed and why.

This catalog doesn't aim to replace the PHP manual or the official changelogs: it complements them by focusing specifically on backward-compatibility breaks and behavior changes, with runnable before/after examples.

## Contributions

Contributions are welcomed, by submitting a PR to the [repository](https://github.com/dseguy/changedBehavior)

+ New or missing behavior changes to be added, preferably with a code example
+ Corrections to the PHP version where a change actually happened
+ Extra links to related error messages, RFCs or static-analysis rules
+ Checks on existing entries against current PHP versions

