<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Functions
  // Similar syntax to JS to define a function, and seems like there is also arrow functions
  function printStr(string $str)
  {
    echo $str;
  }

  echo "<br>";
  echo "Calling a function that returns the string variable provided to it as an argument";

  echo "<br>";
  printStr("This is a string");

  // Arrow function - short closure
  $stuff = fn(int $x) => $x * $x;
  echo "<br>";
  echo $stuff(2);

  // Multiple arguments
  function nameAndBirthYear($name, $birthYear)
  {
    echo "$name was born in the year $birthYear of our lord and savior";
  }

  echo "<br>";
  nameAndBirthYear("Petri", 1987);

  // Passing arguments by reference - as was the case with arrays, you can change the values by referencing the arguments
  function addValue(&$value, $toAdd)
  {
    $value += $toAdd;
  }

  $value = 5;
  $toAdd = 5;
  echo "<br>";
  echo "Original value: $value; added value: $toAdd";
  echo "<br>";
  addValue($value, $toAdd);
  echo "After running function: $value";

  // Variable number of arguments
  echo "<br>";
  echo "Using spread operator in front of the function parameter - specifically last or only - makes function to accept unknown number of arguments";
  echo "<br>";

  function args(...$x)
  {
    $n = 0;
    $len = count($x);

    for ($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }

    return $n;
  }

  echo "4 arguments here summed - 1, 2, 3, 4";
  echo "<br>";
  echo args(1, 2, 3, 4);
  function myFamily($lastname, ...$firstname)
  {
    $txt = "";
    $len = count($firstname);
    for ($i = 0; $i < $len; $i++) {
      $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }

  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;

  // function with a return type
  function typed(int $num, string $str) : string {
    return "$num + $str";
  }

  echo "<br>";
  echo typed(1, "str");
  ?>
</body>

</html>