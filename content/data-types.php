<!DOCTYPE html>
<html>
  <body>
    <?php
      // Data types supported: String, Integer, Float - Double, Boolean, Array, Object, NULL, Resource
      // var_dump() returns the data type and the value
      $x = 5;
      $y = "str";
      echo var_dump($x);
      echo "<br />";
      echo var_dump($y);

      // Array
      echo "<br />";
      $testArray = array(1, "num 2", "num 3", 1.22, array(1, 2, 3));
      echo var_dump($testArray);

      // Class / Object
      class Car {
        public $color;
        public $manufacturer;

        public function __construct($color, $manufacturer) {
          $this->color = $color;
          $this->manufacturer = $manufacturer;
        }

        public function getCar() {
          $str = "Color of the car is $this->color and is manufactured by $this->manufacturer";

          return $str;
        }
      }

      echo "<br />";
      $newCar = new Car("Red", "Volvo");
      echo $newCar->getCar();
      echo "<br />";
      echo var_dump($newCar);

      // NULL
      echo "<br />";
      $z;
      $y = null;
      echo var_dump($z);
      echo $y;

      // Casting
      $x = "str";
      echo var_dump($x);
      echo var_dump((int) $x);

      // Resources are external system handles, such as DB connection like $conn = pg_connect("dbname=test");
    ?>
  </body>
</html>