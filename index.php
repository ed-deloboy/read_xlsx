<?php

use Shuchkin\SimpleXLSX;


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>hooooooy</h1>

  <?php


  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);

  require_once 'lib/SimpleXLSX.php';

  echo '<h1>Parse red.xslx</h1><pre>';
  if ($xlsx = SimpleXLSX::parse('red.xlsx')) {
    print_r($xlsx->rows());
    // print_r($xlsx->rows()[1]);
  } else {
    echo SimpleXLSX::parseError();
  }
  echo '<pre>';
  ?>
</body>

</html>