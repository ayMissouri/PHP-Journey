<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Paragraph 1</p>
  <?php
    echo "Paragraph 2";
  ?>
  <p>Paragraph 3</p>

  <?php 
    $firstName = "Ahmed";
    $lastName = "Missouri";
    $age = "21";
  ?>

  <?php 
    CONST PI = 3.14159265359
  ?>

    
  <?php
    if (true) {
      echo $firstName, " ", PI;
    };
  ?>
</body>
</html>