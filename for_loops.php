<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>for loops</title>
  </head>
  <body>
      <?php
        //! FOR loops operate like this
        //* for loops have three sections separated by semi colons
        //* part 1 initialize the expression only ran once
        //*part 2 test expression checked on each loop like a while loop
        //*part 3 runs during each loop of the for each loop
      ?>
      
  <?php
  //while loop example
      $count = 0;//this is your initialization step
      while($count <= 10){//this here is your test expression inside the paranthese 
          echo $count . ", ";
        $count++; //increment by 1 // this would be your part3 of your for loop
      } ?>
      <br/>
<?php
//the for loop is allowing us to get everything stated from the start on one line
for($count=0;$count<= 10;$count ++){
    //what we want to do each time we go through the loop
echo $count .", ";
}
?>

<?php
for($count=20;$count > 0;$count --){
    if($count % 2 == 0){
        echo "{$count} is even.<br/>";
    }else{
        echo "{$count} is odd.<br/>";
    }



}



?>



<?php?>

  </body>
</html>
