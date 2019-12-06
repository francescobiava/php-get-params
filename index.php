<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <?php
    
    $password = $_GET['password'];
    if ($password === 'boolean') {
      $message = '<h1 style="color:green"> Accesso riuscito </h1>';
    } else {
      $message = '<h1 style="color:red"> Accesso negato </h1>';
    }

  ?>

</head>
<body>

<?php 

echo $message;

?>

</body>
</html>