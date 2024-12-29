```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = []; // empty array
echo calculateSum($numbers); // Output: 0

//Unexpected behavior with non-numeric values
$numbers = [1, 2, 'a', 4, 5];
echo calculateSum($numbers); //Output: 12, unexpected, should show an error
```