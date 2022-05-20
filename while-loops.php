<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Module 6 loops</title>
  </head>
  <body>
    <?php
      $count = 0;
      while($count <= 10){
        if ($count == 5){
          echo "FIVE, ";
        } else{
        echo $count . ", ";//if you put the $count in here it will loop infinitly after reaching 5 because it has reached it perameter and has no way to end the function PHP will time out
      }
        $count++; //increment by 1
      } ?>
      <br/>
      <?php
      $scount=0;
      while($scount <= 15){
        if ($scount % 2){
          echo "EVEN, ";
        } else{
        echo  "Odd ";//if you put the $count in here it will loop infinitly after reaching 5 because it has reached it perameter and has no way to end the function PHP will time out
      }
      if ($scount == 15){
        echo "STOP";
      }
        $scount++; //increment by 1
      }
    echo "<br/>";
    echo "count: {$count}";
   ?>





  </body>
</html>
