<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Loops available in PHP: while, do...while, for, and foreach
  // While loop - loops through the block of code as long as the condition is true:
  $i = 6;
  echo "Condition: variable greater than 1, less 1 for each loop";
  echo "<br>";

  while ($i > 1) {
    echo $i;
    $i--;
    echo "<br>";
  }

  echo "<br>";
  $i = 6;
  echo "Condition: variable greater than 1, less 1 for each loop - break early when variable is 3";
  echo "<br>";

  while ($i > 1) {
    echo $i;
    $i--;
    echo "<br>";

    if ($i === 3) break;
  }

  echo "<br>";
  $i = 6;
  echo "Condition: variable greater than 1, less 1 for each loop - continue keyword to skip when it's 3";
  echo "<br>";

  while ($i > 1) {
    $i--;

    if ($i === 3) continue;

    echo $i;
    echo "<br>";
  }

  // Do While loop - loops through the block of code at least once and then repeats as long as the condition is true
  echo "<br>";
  $i = 0;
  echo "Condition: check if the variable is less than 2";
  echo "<br>";

  do {
    echo $i;
    $i++;
    echo "<br>";
  } while ($i < 2);

  // Break and continue still applies but have to pay attention where it's checked since the loop runs at least once

  // For loop
  // loop through the block of code a set number of times
  echo "<br>";
  echo "Loop 10 times, printing numbers, starting from 0";
  echo "<br>";

  for ($i = 0; $i < 10; $i++) {
    echo "Number: $i";
    echo "<br>";
  }

  echo "<br>";
  echo "Same as before, but break is being used to escape early when number is 3";
  echo "<br>";

  for ($i = 0; $i < 10; $i++) {
    if ($i === 3) break;

    echo "Number: $i";
    echo "<br>";
  }

  echo "<br>";
  echo "Continue if the variable is 3 - notice that expression 3 in the for loop is still evaluated";
  echo "<br>";

  for ($i = 0; $i < 10; $i++) {
    if ($i === 3) continue;

    echo "Number: $i";
    echo "<br>";
  }

  // Foreach loop
  // Loops through the block of code for each element in an array or each property in an object
  $cars = array("Volvo", "Audi", "Mercedes");

  echo "<br>";
  echo "Loop through cars array for each element, printing the element";
  echo "<br>";
  print_r($cars);
  echo "<br>";

  foreach ($cars as $car) {
    echo "$car <br>";
  }

  // Associative array
  $cars = array("Volvo" => "Car 1", "Audi" => "Car 2", "Mercedes" => "Car 3");

  echo "<br>";
  echo "Loop through cars associative array for each element, printing the key - value pairs - ";
  echo "<br>";
  print_r($cars);
  echo "<br>";

  foreach ($cars as $car => $carNumber) {
    echo "$car : $carNumber <br>";
  }

  // Object properties
  enum Sex: string
  {
    case Male = 'male';
    case Female = 'female';
  }

  class Human
  {
    public string $name;
    public Sex $sex;

    public function __construct(string $name, Sex $sex)
    {
      $this->name = $name;
      $this->sex = $sex;
    }
  }

  $person = new Human("Petri", Sex::Male);

  echo "<br>";
  echo "Loop through Human object properties";
  echo "<br>";
  print_r($cars);
  echo "<br>";

  foreach ($person as $x => $y) {
    if ($y instanceof Sex) {
      // convert enum to string
      $y = $y->value;
    }

    echo "$x : $y <br>";
  }

  // Same break and continue apply
  // You can change the values in the array in the loop if it's assigned by reference using & character
  $colors = array("red", "green", "blue", "yellow");
  echo "<br>";

  foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
  }

  var_dump($colors);
  ?>
</body>

</html>