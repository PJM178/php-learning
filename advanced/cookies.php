<?php
  $cookieName = "user";
  $testCookie = "test-cookie";
  setcookie($cookieName, "John PHP Himself");
  setcookie($testCookie, "This is only a test");
?>
<!DOCTYPE html>

<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Cookies
  echo "Cookie is a small piece of data, such as token recognizing the user, that a website stores in a web browser locally. Like with token, it can be used to persist data." . "<br>";
  echo "A cookie can be set with setcookie(name, value, expire, path, domain, secure, httponly) function - only parameter that is required is name." . "<br>";
  echo "Note: a cookie must be set before html tag." . "<br>";
  echo "<br>";
  echo "Retrieving 'user' cookie that's been set before using superglobal \$_COOKIE:" . "<br>";
  if (isset($_COOKIE[$cookieName])) {
    echo "Cookie named $cookieName has a value of " . $_COOKIE[$cookieName] . "<br>";
  } else {
    echo "There is no cookie named " . "\"" . $cookieName . "\"" . "<br>";
  }
  echo "<br>";
  echo "Delete cookie by setting an expiration date that is in the past or right now with 0." . "<br>";
  echo "<br>";
  echo "Cookies may not be enabled by the browser so sometimes it pays attention to check if the cookies are enabled." . "<br>";
  echo "Checking if test-cookie is set:" . "<br>";

  if (count($_COOKIE) > 0 ) {
    echo "There are cookies in the \$_COOKIES superglobal";
  } else {
    echo "Cookies are disabled.";
  }
  echo "<br>";
  ?>
</body>

</html>