<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loops assignment</title>
</head>
<body>
    PART 1:<br/>
1 while loop:
    <br/>
        <?php
        //while loop while count is less than nine output abc
        $abc=0;
        while($abc <= 8 ){
        echo "abc ";
        $abc ++;//increment by 1
        }
        ?>
    <br/>
2 do-while loop:
        <?php
        //do-while loop
        //puts the condition check last it will continue to go until $xyz <= 9
        $xyz=0;
        do{
        echo "xyz ";
        $xyz ++;
        } while($xyz <=9);
        ?>
    <br/>
3 for loop:
        <?php
        //for loop initialize, test, runs during each loop separated by 3 semicolons.
            for($num=0;$num<=9;$num++){
                echo $num . " ";
            }
        ?>
    <br/>
4 for loop:
        <?php
        echo '<br>';
        $forarray =array("1.Item A","2.Item B","3.Item C","4.Item D","5.Item E","6.Item F",);//holding array items 
        for($i=0;$i<=5;$i++){//going though 0 through 5 loops 5 times
            echo $forarray[$i];//every time the for loop, loops it goes to the $forarray and grabs a value from the list.
            echo '<br>';//this creates a line break every time it is looped through.

        }
        ?>
        <br/>

PART 2:<br/>
5 for loop finding sqrt: 
    <sup>
        <?php
        echo '<br>';//line break
        $squares= array(1,2,3,4,5,6,7,8,9,10,11,12);//assigning 1-2 to $ squares to be called later in the for loop
        for($i=0;$i<=11;$i++){//starts at 0 loops through less than or equal to 11 times.
        echo sqrt($squares[$i]); //echo the sqrt of $squares
        echo'<br/>';//line break
        }   
        ?>
    </sup>
PART 3:<br/>
6 two for make multiplication table:
        <br/>
        <?php
         echo "<table border =\"2\" style='border-collapse: collapse'>";//gives a table border
        for($row=1;$row<=7;$row++){//1 through 7
       echo "<tr> \n";//table row element defines a row of cells in a table

        for($col=1;$col<=7;$col++){//1 through 7 
         $a= $col * $row;// grabing the $col and $row each time they loop and multiplying them and passing the result to the table data cell element
         echo "<td>$a</td> \n";//puts numbers into columns and boxes a echo the answer from multiplying $col and $row table data cell element
        }
        echo"</tr>";//end of table row elements

        }
        echo "</table>";//end of table
  
        ?>
PART 4:<br/>
    <?php
    $months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    $daysinmonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        echo "<table border =\"2\" style='border-collapse: collapse'>";
         echo "<th>Days in a month</th>";
        foreach($months as $month =>$currentmonth){
            echo "<tr> \n";
            echo "<td>$currentmonth</td> \n";
            echo "<td>$daysinmonth[$month]</td>\n";
        echo "</tr>"; 
        }
        echo "</table>";
    ?> 
    
</body>
</html>