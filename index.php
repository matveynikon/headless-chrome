<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<p>...jeffyyymmmaaannn..</p>
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);  
  ignore_user_abort(true);   
  sleep(2);
  exec("node app.js",$o,$v);
  print_r($o);
  echo($v);
?>
</body>
</head>