<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>break</title>
  </head>
  <body>


<?php
    for($count=0; $count <= 10; $count++){
    if ($count == 5 ){
        break;//immediately exits the loop when conditions are met
    }
    echo $count . ", ";
    }
    //example of when break is good to use if you are searching 20,000 records and find it in the 100th loop being able to break out of the loop once it is found will save lots of time 
    ?>
    <br/>
    <?php
for($i=0; $i<=5;$i++){
            if($i % 2 == 0){continue(1);}//left side of result on screen skipping even numbers and outputting odds on continue it go back through the loop if it is equal to a modulo of %2
            for($k=0; $k<=5;$k++){//this loopp is outputing the data that is showing on the right side when echoing the data and counts from 0 to 5 and starts over
                if($k == 3){break(2);}// breaks out of the loop == 3
                echo $i . "-" .$k ."<br/>";//echo results to the browser
            }
        }
        //*the parenthesis next to break in this instance allow you to break out of booth loops ending them
?>

  </body>
</html>
