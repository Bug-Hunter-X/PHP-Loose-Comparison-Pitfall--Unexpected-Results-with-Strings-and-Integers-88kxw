# PHP Loose Comparison Pitfall

This repository demonstrates a common, yet subtle, error in PHP related to loose comparison (`==`) of strings and integers.  The loose comparison operator does type juggling, which can lead to unexpected and potentially problematic behavior. 

The `bug.php` file contains code exhibiting this issue. The `bugSolution.php` file provides a corrected version using strict comparison (`===`).

## The Problem

PHP's loose comparison operator (`==`) performs type coercion before comparison. This means that if the operands are of different types, PHP attempts to convert them to a common type before performing the comparison. This can lead to unexpected results when comparing strings and integers, particularly when the string starts with a numerical value.

## The Solution

To avoid this type of error, always use strict comparison (`===`). Strict comparison checks for both value and type equality. This ensures that the comparison only evaluates to true if both the value and the type of the operands are identical.

## How to run the code

Simply run the `bug.php` and `bugSolution.php` files using a PHP interpreter. Observe the differences in the output between the two files.