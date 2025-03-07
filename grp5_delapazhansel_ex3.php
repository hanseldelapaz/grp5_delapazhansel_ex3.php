<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Operations</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      width: 100%;
      height: 100%;
      position: relative;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .container {
      width: 500px;
      height: auto;
      border: 2px solid #333;
      margin: 50px auto;
      padding: 20px;
      text-align: center;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .output {
      margin: 10px 0;
      padding: 10px;
      background-color: #e0e0e0;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>File Operations</h1>
  <?php
    $filename = "example.txt";

    if (file_exists($filename)) {
        echo "<div class='output'>File <strong>$filename</strong> exists.</div>";
    } else {
        echo "<div class='output'>File <strong>$filename</strong> does not exist.</div>";
    }

    $content = "This is a new file content.\nHere's another line!";
    $bytesWritten = file_put_contents($filename, $content);
    if ($bytesWritten !== false) {
        echo "<div class='output'>Successfully wrote $bytesWritten bytes to <strong>$filename</strong>.</div>";
    } else {
        echo "<div class='output'>Failed to write to <strong>$filename</strong>.</div>";
    }

    $fileContent = file_get_contents($filename);
    echo "<div class='output'>Content of <strong>$filename</strong>:</div>";
    echo "<pre>$fileContent</pre>";

    $fileLines = file($filename, FILE_IGNORE_NEW_LINES);
    echo "<div class='output'>File contents as an array:</div>";
    echo "<pre>";
    print_r($fileLines);
    echo "</pre>";
  ?>
</div>

</body>
</html>