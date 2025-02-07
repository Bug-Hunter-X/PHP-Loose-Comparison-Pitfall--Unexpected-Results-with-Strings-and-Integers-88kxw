The solution involves using PHP's strict comparison operator (`===`) instead of the loose comparison operator (`==`).  Strict comparison ensures that both the value and the type are compared. 

```php
$a = '0';
$b = 0;

if ($a === $b) {
  echo '$a and $b are equal';
} else {
  echo '$a and $b are not equal';
}

$a = '1';
$b = 1;

if ($a === $b) {
  echo '$a and $b are equal';
} else {
  echo '$a and $b are not equal';
}

$a = '1abc';
$b = 1;

if ($a === $b) {
  echo '$a and $b are equal';
} else {
  echo '$a and $b are not equal';
}
```

Using strict comparison will prevent unexpected results by ensuring that only values of the same type and value will evaluate as equal.