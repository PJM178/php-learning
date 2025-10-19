<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Arrays
  // Three types of array: indexed arrays, associative arrays, and multidimensional arrays
  // Arrays can have any kind of variables, including functions and objects, for example
  $arr = array("str", 2, [1, 2], fn($x) => $x * $x);
  print_r($arr);
  echo "<br>";
  echo "Calling the function at the index of 3 with argument 2";
  echo "<br>";
  echo $arr[3](2);
  echo "<br>";
  echo "Bunch of array specific inbuilt function, such as count()";
  echo "<br>";
  echo "Number of items in the array: " . count($arr);
  echo "<br>";
  echo "<br>";

  // Indexed arrays
  echo "With indexed arrays each item in the array has an index, starting from 0 by default";
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  echo "<br>";
  echo "Access an item in an array by using its index number, and also change the value at the index by assinging a new value to that index";
  echo "<br>";
  echo "Loop through the array with foreach, for example";
  echo "<br>";
  foreach ($cars as $car) {
    echo "$car <br>";
  }
  echo "or for loop with the length of the array and using index";
  echo "<br>";
  for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "<br>";
  }
  echo "You can add new items to array by using array_push() function - the index will be the last index + 1";
  echo "<br>";
  array_push($cars, "Ford");
  var_dump($cars);
  echo "<br>";
  echo "Indexes can be arbitrary numbers, also";
  echo "<br>";
  $arb[15] = 15;
  var_dump($arb);
  echo "<br>";
  echo "<br>";

  // Associative arrays - very similar to objects in JS
  // You access an item by refering to its key as opposed to index number as with indexed arrays
  echo "You access an item by refering to its key as opposed to index number as with indexed arrays";
  $processor = array("manufacturer" => "Intel", "model" => "i7-14700");
  echo "<br>";
  var_dump($processor);
  echo "<br>";
  echo $processor["manufacturer"];
  echo "<br>";
  echo "To change value, refer to the key value";
  $processor["manufacturer"] = "AMD";
  echo "<br>";
  echo $processor["manufacturer"];
  echo "<br>";
  echo "Loop through the array using foreach loop, for example";
  echo "<br>";
  foreach ($processor as $key => $value) {
    echo "$key: $value <br>";
  }
  echo "<br>";
  echo "<br>";

  // Creating arrays
  echo "Using array() function";
  echo "<br>";
  $persons = array("Petri", "Anna", "Jorma");
  var_dump($persons);
  echo "<br>";
  echo "Using [] shorthand";
  echo "<br>";
  $animals = ["Bear", "Dog", "Cat"];
  var_dump($animals);
  echo "<br>";
  echo "Indexed arrays are basically the same as associative arrays but keys are autoincrementing numbers";
  echo "<br>";
  $cars = [
    0 => "Volvo",
    1 => "Ford",
  ];
  var_dump($cars);
  echo "<br>";
  $cars = [
    "brand" => "Audi",
    "Model" => "A4",
  ];
  var_dump($cars);
  echo "<br>";
  echo "An empty array can be declared and then values assigned to indexes or keys";
  echo "<br>";
  $cars = [];
  $cars[0] = "Volvo";
  var_dump($cars);
  echo "<br>";
  $cars = [];
  $cars["manufacturer"] = "Volvo";
  var_dump($cars);
  echo "<br>";
  echo "Nothing is stopping from having both numbers, i.e. indexes, and strings as keys";
  echo "<br>";
  $cars = [];
  $cars["manufacturer"] = "Volvo";
  $cars[0] = "Fruit";
  var_dump($cars);
  echo "<br>";
  echo $cars[0];
  echo "<br>";
  echo $cars["manufacturer"];
  echo "<br>";
  echo "<br>";

  // Accessing array items
  echo "Access items in an array by using indexes or keys, depending on the array";
  echo "<br>";
  echo "If the array has an function, access it by \$arr[0]()";
  echo "<br>";
  $funArr = array(fn(string $str) => $str);
  var_dump($funArr);
  echo "<br>";
  echo $funArr[0]("Returned from function");
  echo "<br>";
  echo "<br>";

  // Updating array items
  echo "To update items in arrays, refer to the item by the index or key";
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  echo "<br>";
  $cars[1] = "Ford";
  var_dump($cars);
  echo "<br>";
  $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
  var_dump($cars);
  $cars["year"] = 2024;
  echo "<br>";
  var_dump($cars);
  echo "<br>";
  echo "Updating in a loop, use & operator in front of the item to assign the item value by reference";
  echo "<br>";
  echo "Need to remember to use unset(\$variable) so that it no longer references the last item of the array if assigning values to the variable later";
  $cars = array("Volvo", "BMW", "Toyota");
  foreach ($cars as &$x) {
    $x = "Ford";
  }
  unset($x);
  echo "<br>";
  var_dump($cars);
  echo "Omitting unset causes funny things";
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  foreach ($cars as &$x) {
    $x = "Ford";
  }
  $x = "ice cream";
  var_dump($cars);
  echo "<br>";
  echo "<br>";

  // Add items to an array
  echo "Add items using arr[] = \"'item'\" or with associated arrays arr['color'] = 'red'";
  $fruits = array("Apple", "Banana", "Cherry");
  echo "<br>";
  var_dump($fruits);
  $fruits[] = "Orange";
  echo "<br>";
  var_dump($fruits);
  $cars = array("brand" => "Ford", "model" => "Mustang");
  echo "<br>";
  var_dump($cars);
  $cars["color"] = "Red";
  echo "<br>";
  var_dump($cars);
  echo "<br>";
  echo "Use array_push() function to add multiple items to indexed array";
  echo "<br>";
  $fruits = array("Apple", "Banana", "Cherry");
  var_dump($fruits);
  echo "<br>";
  array_push($fruits, "Orange", "Kiwi", "Lemon");
  var_dump($fruits);
  echo "<br>";
  echo "with associative array use += operator";
  echo "<br>";
  $cars = array("brand" => "Ford", "model" => "Mustang");
  var_dump($cars);
  // Basically appending a new associative array to the end
  $cars += ["color" => "red", "year" => 1964];
  echo "<br>";
  var_dump($cars);
  echo "<br>";
  echo "<br>";

  // Delete array items
  echo "array_splice() can be used to remove items from an index certain number forward in the array";
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  echo "<br>";
  array_splice($cars, 1, 1);
  var_dump($cars);
  echo "<br>";
  echo "unset() can also be used to remove items, multiple also, but it doesn't reindex the array";
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  unset($cars[1]);
  echo "<br>";
  var_dump($cars);
  echo "<br>";
  echo "array_pop() and array_shift() can be used to remove last and first item, respectively";
  echo "<br>";
  echo "To remove item from associate array, unset() can be used";
  echo "<br>";
  $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
  var_dump($cars);
  echo "<br>";
  unset($cars["model"]);
  var_dump($cars);
  echo "<br>";
  echo "Remove multiple items using array_diff(), creating a new array. It takes values as parameters, not keys";
  echo "<br>";
  $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964, "color" => "red");
  var_dump($cars);
  echo "<br>";
  $newarray = array_diff($cars, ["Mustang", 1964, "red"]);
  var_dump($newarray);
  echo "<br>";
  echo "<br>";

  // Sorting
  echo "There are bunch of inbuilt functions for array sorting - both indexed arrays and associative arrays have their own functions, and associative array has functions for both key and value based sorting";
  echo "<br>";
  $numArray = [12, 4, 2, 1];
  var_dump($numArray);
  echo "<br>";
  sort($numArray);
  var_dump($numArray);
  echo "<br>";
  echo "<br>";

  // Multidimensional arrays (matrices)
  echo "Basically array of arrays";
  $cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
  );
  echo "<br>";
  var_dump($cars);
  echo "<br>";
  echo "row 1 and column 1, same notation as matrices mathematically";
  echo "<br>";
  echo $cars[0][0];
  echo "<br>";
  echo "Standard stuff of loop inside of a loop for looping through the values";
  echo "<br>";
  echo "Concluding, there are many inbuilt functions for arrays so always check if one is available when doing operations";
  ?>
</body>

</html>