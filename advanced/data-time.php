<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Date and time
  echo "date() function is used to format a date and/or time.";
  echo "<br>";
  echo "It takes two parameters: format, which has various options, and timestamp (from epoch), default being the current date and time.";
  echo "<br>";
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l") . "<br>";
  echo "Using epoch timestamp 0: " . date("Y/m/d", 0);
  echo "<br>";
  echo "<br>";
  echo "Above are formatted using year, month, and day options, but you can also use hours, minutes, and seconds to format.";
  echo "<br>";
  echo "The time is " . date("h:i:sa") . "<br>";
  echo "The time is " . date("H:i:s", 50000) . "<br>";
  echo "It's noteworthy that the date() function will return the current time or date of the server.";
  echo "<br>";
  echo "You can use date_default_timezone_set() to set the timezone";
  echo "<br>";
  $timezone = "America/New_York";
  date_default_timezone_set($timezone);
  echo "Setting timezone to $timezone";
  echo "<br>";
  echo "The time is " . date("h:i:sa");
  echo "<br>";
  echo "<br>";
  echo "mktime() function can be used to create a timestamp for the date date() function." . "<br>";
  echo "mktime(hour, minute, second, month, day, year)";
  $d = mktime(11, 14, 54, 8, 12, 2014);
  echo "<br>";
  echo "Created date is " . date("Y-m-d h:i:sa", $d);
  echo "<br>";
  echo "strtotime() function can be used to create a timestamp from more human readable date string, for example 10:30pm April 15 2014" . "<br>";
  $d = strtotime("10:30pm April 15 2014");
  echo "Created date is " . date("Y-m-d h:i:sa", $d);
  echo "<br>";
  echo "You can use various values there so it pays to know some common ones.";
  echo "<br>";
  $tomorrow = "tomorrow";
  echo "Value: " . $tomorrow;
  echo "<br>";
  $d = strtotime($tomorrow);
  echo date("Y-m-d h:i:sa", $d) . "<br>";
  $nextSaturday = "next Saturday";
  echo "Value: " . $nextSaturday;
  echo "<br>";
  $d = strtotime($nextSaturday);
  echo date("Y-m-d h:i:sa", $d) . "<br>";
  $threeMonths = "+3 Months";
  echo "Value: " . $threeMonths;
  echo "<br>";
  $d = strtotime($threeMonths);
  echo date("Y-m-d h:i:sa", $d) . "<br>";
  $oneDay = "+1 Days";
  echo "Value: " . $oneDay;
  echo "<br>";
  $d = strtotime($oneDay);
  echo date("Y-m-d h:i:sa", $d) . "<br>";
  echo "<br>";
  echo "<br>";
  echo "Some more examples.";
  echo "<br>";
  echo "Output the dates of the next six Saturdays - Unix epoch makes it easy to compare dates.";
  $startDate = strtotime("next Saturday");
  $endDate = strtotime("+6 weeks", $startDate);

  while ($startDate < $endDate) {
    echo date("M d", $startDate) . "<br>";
    $startDate = strtotime("+1 week", $startDate);
  }

  $day = "2024/10/19";
  echo "Number of days to $day.";
  echo "<br>";

  function timeToDate(string $day): string
  {
    $currentTime = time();
    $desiredTime = strtotime($day);

    if (($desiredTime - $currentTime) < 0) {
      $desiredTime = strtotime("$day +1 year");
    }

    return $desiredTime;
  }

  $d1 = timeToDate($day);
  $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
  echo "There are $d2 days " . ($d2 < 0 ? "to" : "until") . " $day.";
  ?>
</body>

</html>