<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // if, if...else, if...elseif...else, and switch - pretty similar to JS
  $x = 1;
  $y = 0;

  if ($x > $y) {
    echo "$x > $y";
  }

  // There are comparison operators, again similar to JS with == equal and === identical with same type, but
  // With logical operators there is at least xor that is not in JS, which is true if either is true but not both
  $x = true;
  $y = false;

  if ($x xor $y) {
    echo "This prints because one of them ($x and $y), and only one, is true";
  }

  // else if as in JS but the syntax is elseif (condition)

  // Switch is also similar to JS
  $favoriteNumber = 2;
  echo "<br />";
  switch ($favoriteNumber) {
    case 1:
    case 13:
      echo "Your favorite number is 13!";
      break;
    case 12:
      echo "Your favorite number is 12!";
      break;
    case 11:
      echo "Your favorite number is 11!";
      break;
    default:
      echo "Every number is your favorite number!";
  }
  ?>
</body>

</html>