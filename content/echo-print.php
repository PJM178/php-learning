<!DOCTYPE html>
<html>
  <body>
    <h1>Echo / Print</h1>
    <?php
    // Without parentheses
    echo "Hello";

    echo "<br />";

    // With parentheses
    echo("Hello");

    // Can have multiple parameters as well as HTML markup
    echo "<br />Hello", ",", " this is multiple", " <i>parameters</i>";

    // Can have variables
    $test = "Test";
    echo "<h1>$test</h1>";

    // There is a difference between single and double quotes - variables cannot be inside single quotes
    // and have to be inserted with "." operator
    $test = "Test";
    echo '<h1>$test</h1>';
    echo '<h1>' . $test . '</h1>';
    echo "<h1>$test</h1>";

    // Print statement is similar to echo but as return value, doesn't accept multipe parameters,
    // and is slower
    $var = print "Hello<br />";
    print "Jorma $var";

    if (print "Hello") {
    echo " - Printed successfully!";
    }
    ?>
  </body>
</html>