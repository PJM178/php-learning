<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Math
  echo "There are bunch of inbuilt math functions that allows for math operations like with most other languages";
  echo "<br />";
  echo "Couple examples:";
  echo "<br />";
  echo "Pi:";
  echo "<br />";
  echo pi();
  echo "<br />";
  echo pi();
  echo "<br />";
  echo "min() and max() - find the minimum or maximum value in the list of arguments, respectively:";
  echo "<br />";
  $array = [2, 1, -1];
  echo "Array:";
  echo "<br />";
  print_r($array);
  echo "<br />";
  echo "Min";
  echo "<br />";
  echo min($array);
  echo "<br />";
  echo "Max";
  echo "<br />";
  echo max($array);
  echo "<br />";
  echo "abs() returns the absolute value, i.e. the positive value:";
  echo "<br />";
  echo $val = -5.5;
  echo "<br />";
  echo "Absolute value: " . abs($val);
  echo "<br />";
  echo "sqrt() returns the squared value:";
  echo "<br />";
  echo $val = 9;
  echo "<br />";
  echo "Squared value: " . sqrt($val);
  echo "<br />";
  echo "round() rounds a floating point number to the nearest integer:";
  echo "<br />";
  echo $x = 9.9;
  echo "<br />";
  echo $y = 9.49;
  echo "<br />";
  echo "Rounded value 1: " . round($x);
  echo "<br />";
  echo "Rounded value 2: " . round($y);
  echo "<br />";
  echo "random() gives a random number, with optional min and max parameters defining the range:";
  echo "<br />";
  echo "Random value: " . rand();
  echo "<br />";
  echo "Random value in range [0, 100]: " . rand(0, 1);
  echo "<br />";
  echo "Random floating value in range [0, 1]: " . mt_rand() / mt_getrandmax();
  ?>
</body>

</html>