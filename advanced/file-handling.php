<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <form action="file-handling.php" method="post" enctype="multipart/form-data">
    <div>
      <div>Select an image to upload:</div>
      <input type="file" name="imageToUpload" id="imageToUpload" accept="image/*">
      <input type="submit" value="Upload Image" name="submit">
    </div>
  </form>
  <?php
  // File handling - opening, reading, creating, writing, uploading
  echo "readfile() function can be used to read a file and write its contents to the output buffer, returning the number of bytes" . "<br>";
  echo readfile("../resources/cities.txt");
  echo "<br>";
  echo "Output buffer can be controlled if enabled for example with ob_start(), ob_get_contents(), and ob_end_clean()." . "<br>";
  echo "<br>";
  echo "<br>";

  // Open, read, and close
  echo "Better method than readfile() to open files is fopen() function since it gives more options";
  echo "<br>";
  $file = fopen("../resources/cities.txt", "r");
  echo $file;
  echo "<br>";
  echo "Bunch of options to either read using 'r' or write using 'w', or for example a+ which opens it for both reading and writing, creating a new file if it doesn't exist, and file pointer starts at the end of the file.";
  echo "<br>";
  $file = fclose($file);
  echo "fclose() function can be used to close the files, and on the next line the file is closed and bool (1) is returned for success.";
  echo "<br>";
  echo "After opening a file, reading it and doing whatever with it, it's good to close it so that no resources are left taking memory.";
  echo "<br>";
  echo $file;
  $file = fopen("../resources/cities.txt", "r");
  echo "<br>";
  echo "fread() function reads from an open file.";
  echo "<br>";
  echo "Need to provide how many bytes are read from the file.";
  echo "<br>";
  $arr = fread($file, filesize("../resources/cities.txt"));
  echo $arr;
  $strArr = preg_split('/\r\n|\r|\n/', trim($arr));
  var_dump($strArr);
  echo "<br>";
  echo "fgets() reads a single line from a file, and the file pointer gets moved to the next line, so you can easily loop through the file with the function.";
  echo "<br>";
  $file = fopen("../resources/cities.txt", "r");
  $end = fgets($file);

  while (strlen($end) > 0) {
    echo $end . "<br>";
    $end = fgets($file);
  }
  echo "<br>";
  echo "feof() function is useful to check if we are at the end of the file, i.e. the last line.";
  echo "<br>";
  $file = fopen("../resources/cities.txt", "r");

  while (!feof($file)) {
    echo fgets($file) . "<br>";
  }

  echo "<br>";
  echo "fgetc() function reads a single character from the file and moves the file pointer to the next.";
  echo "<br>";

  $file = fopen("../resources/cities.txt", "r");

  while (!feof($file)) {
    echo fgetc($file) . "<br>";
  }

  $closeFile = fclose($file);

  if (!$closeFile) {
    die("Couldn't close file properly");
  }

  if (is_resource($file)) {
    echo "Still a resource";
  } else {
    echo "No longer a resource";
  }
  echo "<br>";
  echo "<br>";

  // Create file
  echo "Depending on what you pass on to fopen(), it can be used to create and write a file.";
  echo "<br>";
  echo "with 'w' parameter and if the file doesn't exist, it's then created.";
  echo "<br>";
  $createdFile = fopen("../resources/test-file.txt", "w");
  echo "<br>";
  echo "fwrite() function can be used to write in to an opened file.";
  echo "<br>";
  $txtToWrite = "Petri \n";
  fwrite($createdFile, $txtToWrite);
  $txtToWrite = "Petri \n";
  fwrite($createdFile, $txtToWrite);
  fclose($createdFile);
  echo "Reading the data in the file after writing couple of lines:";
  echo "<br>";
  $writtenFile = fopen("../resources/test-file.txt", "r");
  $dataInFile = fread($writtenFile, filesize("../resources/test-file.txt"));
  echo $dataInFile;
  fclose($writtenFile);
  echo "<br>";
  echo "Note that 'w' deletes the content that's already in the file, using 'a' parameter will append new lines at the end.";
  echo "<br>";
  echo "<br>";

  // File upload
  $target_dir = "../resources/";
  $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
  var_dump($_FILES["imageToUpload"]);
  echo $target_file;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  echo "<br>";

  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  echo "<br>";
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  echo "<br>";
  if ($_FILES["imageToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  echo "<br>";
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  ?>

</body>


</html>