```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      throw new InvalidArgumentException('Array elements must be numeric.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = []; // empty array
echo calculateSum($numbers); // Output: 0

//Handles non-numeric values by throwing an exception
$numbers = [1, 2, 'a', 4, 5];
try {
  echo calculateSum($numbers); 
} catch (InvalidArgumentException $e) {
  echo 'Error: ' . $e->getMessage(); // Output: Error: Array elements must be numeric.
}
```