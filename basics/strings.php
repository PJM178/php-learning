<!DOCTYPE html>
<html>

<head>
  <style>
    .halo {
      font-size: 64px;
      font-weight: 700;
      color: white;
      text-align: center;
      /* multiple shadows for a soft halo */
      text-shadow:
        0 0 2px rgba(255, 255, 255, 0.9),
        0 0 6px rgba(255, 255, 255, 0.6),
        0 0 14px rgba(0, 153, 255, 0.45),
        0 0 28px rgba(0, 153, 255, 0.25);
      /* background: #0b1220; */
      padding: 40px;
    }
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Double quotes process special characters, such as espaces or variables, single quotes do not
  // so single quotes are slightly more performant but the difference is negligible
  $x = 5;
  echo "Hello, $x \n";
  echo "<br />";
  echo 'Hello, $x';

  // String length
  echo "<br />";
  echo strlen("Hello, world");
  echo var_dump("Hello, world");

  // Word count
  echo "<br />";
  echo str_word_count("Hello, world");

  // Search for text within a String
  echo "<br />";
  echo strpos("Kana juoksee pihalla", "juoksee");
  echo "<br />";

  $str = "Kana juoksee pihalla";
  $x = "x";
  if (!strpos($str, $x)) {
    echo "$x not found in '$str'";
  }

  // String modification
  // Upper case
  echo "<br />";
  $hello = "Hello World!";
  echo strtoupper($hello);

  // Lower case
  echo "<br />";
  echo strtolower($hello);

  // Replace string
  echo "<br />";
  echo str_replace("World", "Jorma", $hello);

  // Reverse a string
  echo "<br />";
  echo strrev($hello);

  // Remove whitespace
  echo "<br />";
  $helloWhitespace = " Hello World! ";
  echo "$helloWhitespace Jorma";
  echo "<br />";
  echo trim($helloWhitespace);

  // Convert string into Array
  $exploded = explode(" ", $hello);
  print_r($exploded);
  echo var_dump($exploded);

  // Concatenate strings
  echo "<br />";
  $x = "Hello";
  $y = "World!";
  $z = $x . " " . $y;
  echo $z;

  // Double quotes are powerful...
  echo "<br />";
  echo "$x $y";

  // Slicing strings
  // Slice at index of 6, end 5 indexes later
  echo "<br />";
  $hello = "Hello World!";
  echo substr($hello, 6, 5);

  // Continue till end from the start index
  echo "<br />";
  echo substr($hello, 6);

  // From the end till certain number
  echo "<br />";
  echo substr($hello, -5, 3);

  // Negative length
  echo "<br />";
  $x = "Hi, how are you?";
  echo substr($x, 5, -3);

  // Escape characters, for example \n, \$ or \"
  // This is illegal:
  // $x = "We are the so-called "Vikings" from the north.";
  // This is legal:
  echo "<br />";
  $x = "We are the so-called \"Vikings\" from the north.";
  echo $x;
  ?>
</body>

</html>