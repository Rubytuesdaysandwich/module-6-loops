<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>break</title>
  </head>
  <body>
<?php?>

<?php
    for($count=0; $count <= 10; $count++){
    if ($count % 2 == 0 ){continue;}//skip over 5 and loop earlier//skip over even numbers and skip over 0
    echo $count . ", ";
    }
    ?>



  </body>
</html>
