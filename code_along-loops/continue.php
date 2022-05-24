<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>continue</title>
</head>
<body>
    <?php
    for($count=0; $count <= 10; $count++){
    if ($count % 2 == 0 ){continue;}//skip over 5 and loop earlier//skip over even numbers and skip over 0
    echo $count . ", ";
    }
    ?>
    <?php
        $count = 0;
        while($count <= 10){
            if ($count == 5){
                 $count++; //increment by 1 this was at the bottom in order for it to increment and not get stuck in a loop == to 5 it need to ++
        continue;
            }
            echo $count . ", ";//if you put the $count in here it will loop infinitely after reaching 5 because it has reached it perimeter and has no way to end the function PHP will time out
            $count++;//increment 1
        }
        ?>
        <br/>

        <?php
        //loop inside a loop with continue
        for($i=0; $i<=5;$i++){
            if($i % 2 == 0){continue(1);}//left side of result on screen skipping even numbers and outputting odds on continue it go back through the loop if it is equal to a modulo of %2
            for($k=0; $k<=5;$k++){//this loopp is outputing the data that is showing on the right side when echoing the data and counts from 0 to 5 and starts over
                if($k == 3){continue(2);}//3 skips over == 3
                echo $i . "-" .$k ."<br/>";//echo results to the browser
            }
        }
        //*the number in parenthesis in the continue argument tells it how far back it should go. so if I assign 2 to the second continue it will go to the top to the first for loop.

        
        
        ?>




</body>
</html>
