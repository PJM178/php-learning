<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Constants are variables that once assigned, cannot be mutated, and they are global
  // Defining a constant, calling it has no $
  define("HELLO", "World");
  echo HELLO;

  // Const keyword can also be used similarly to JS. Difference to define is that define can be created in
  // another block scope such as inside a function
  echo "<br />";
  const myCar = "Volvo";
  echo myCar;

  // Array
  echo "<br />";
  define("cars", [
    "Volvo",
    "Mercedes",
  ]);
  echo cars[1];

  // Global
  function myCar() {
    echo myCar;
  };

  echo "<br />";
  myCar();
  ?>
</body>

</html>