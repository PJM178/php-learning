<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>
<script>
  async function sendName() {
    const response = await fetch("super-globals.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: "fname=Mary"
    });
    const data = await response.text();
    document.getElementById("demo").innerHTML = data;
  }
</script>

<button onclick="sendName()">Send</button>
<div id="demo"></div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
$name = $_POST['fname'];
echo $name;
?>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Superglobals
  echo "Superglobals are predefined variables that are always available no matter the scope";
  echo "<br>";
  echo "Variables: \$GLOBALS \$_SERVER \$_REQUEST \$_POST \$_GET \$_FILES \$_ENV \$_COOKIE \$_SESSION";
  echo "<br>";

  // Globals
  echo "Globals can be accessed from any scope, so for example in a function you can access a variable that is in the outer scope";
  echo "<br>";
  $x = 75;

  function myfunction()
  {
    echo $GLOBALS['x'];
  }

  myfunction();

  $x = 95;

  echo "Alternatively use global keyword inside the inner scope, for example in a function";
  echo "<br>";

  function myfunctionGlobal()
  {
    global $x;
    echo $x;
  }

  myfunctionGlobal();

  echo "<br>";
  echo "Variables inside a function are only in that scope, but with \$GLOBALS you can create them as global";
  echo "<br>";

  function myfunctionGlobal2()
  {
    $GLOBALS["y"] = 100;
  }

  myfunctionGlobal2();

  echo $GLOBALS["y"];
  echo "<br>";
  echo $y;
  echo "<br>";
  echo "<br>";

  // Server
  echo "Holds information about headers, paths, and script locations";
  echo "<br>";
  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['HTTP_HOST'];
  echo "<br>";
  // echo $_SERVER['HTTP_REFERER'];
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_NAME'];
  echo "<br>";
  echo $_SERVER['SERVER_SOFTWARE'];
  echo "<br>";
  echo "<br>";

  // Request
  echo "\$_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data";
  echo "<br>";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  echo "<br>";
  echo "<br>";

  // Post
  echo "\$_POST contains an array of variables received via the HTTP POST method";
  echo "<br>";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
  echo "<br>";
  echo "<br>";

  // Get
  echo "\$_GET contains an array of variables received via the HTTP GET method.";
  echo "<br>";
  echo "<a href='super-globals.php?param1=param1&param2=param2'>Test $GET</a>";
  echo "<br>";

  echo "Query params: " . $_GET['param1'] . " and " . $_GET['param2'];

  ?>
</body>

</html>