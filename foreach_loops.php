<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foreach loops</title>
  </head>
  <body>
<?Php
/*
foreach($array as $value)
statement
*/
//loop through and array
// as is a key word
//$value is created in the loop
?>
<?php
$ages = array(4,8,15,16,23,42);

foreach($ages as $age){
    echo "Age:{$age}<br/>"
}
?>

  </body>
</html>
