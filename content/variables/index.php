<!DOCTYPE html>
<html>
  <body>
    <h1>Scope</h1>
    <?php
      $x = "global scope";

      function jorma() {
        global $x;
        echo $x;
        $x = "<br />local scope";
        echo $x;
      };

      jorma();
      echo "<br>" . $x;
    ?>

    <?php
      $y = "global scope";

      function fun() {
        static $sum = 0;
        
        $sum++;
        echo $sum;
      };

      echo "<br>";
      fun();
      echo "<br>";
      fun();
      echo "<br>";
      fun();
      echo "<br>" . $y;
    ?>
  </body>
</html>