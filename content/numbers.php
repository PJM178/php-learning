<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Main numeric types: Integer, Float, Number String, as well as Inifinity and NaN
  $a = 65;
  $b = 5.46;
  $c = "22";

  var_dump($a);
  echo "<br />";
  var_dump($b);
  echo "<br />";
  var_dump($c);

  // Integers - decimal point operation, for example, makes the number float
  $x = 2;
  echo "<br />";
  var_dump(is_int($x));
  echo "<br />";
  $y = 2.2;
  var_dump(is_int($y));
  // Constants for integers: PHP_INT_MAX, PHP_INT_MIN, PHP_INT_SIZE (size in bytes)

  // Floats
  echo "<br />";
  $float = 2.0;
  var_dump(is_float($float));
  // Constants for integers: PHP_FLOAT_MAX, PHP_FLOAT_MIN, PHP_FLOAT_DIG, PHP_FLOAT_EPSILON
  echo "<br />";
  echo PHP_FLOAT_DIG;
  echo "<br />";
  echo PHP_FLOAT_MAX;
  echo "<br />";
  echo PHP_FLOAT_MIN;
  echo "<br />";
  echo PHP_FLOAT_EPSILON;

  // Infinity
  $x = 1.9e411;
  echo "<br />";
  var_dump(is_infinite($x));
  // Here range is withing allowed ranges for float
  $x = 1.9e307;
  echo "<br />";
  var_dump(is_infinite($x));

  // NaN
  echo "<br />";
  var_dump(acos(2));

  // Numerical strings - is_numeric checks if it's a number or numeric string
  echo "<br />";
  $x = 123;
  var_dump(is_numeric($x));

  echo "<br />";
  $x = "1234";
  var_dump(is_numeric($x));

  echo "<br />";
  $x = 123 + "12";
  var_dump(is_numeric($x));

  echo "<br />";
  $x = "Hello";
  var_dump(is_numeric($x));

  // Casting
  echo "<br />";
  $x = (int) 1234.22;
  echo $x;

  echo "<br />";
  $x =  (int) "1234.99";
  echo $x;

  $users = [
    ["id" => 1, "name" => "Alice"],
    ["id" => 2, "name" => "Bob"]
  ];

  print_r($users);
  ?>
</body>

</html>