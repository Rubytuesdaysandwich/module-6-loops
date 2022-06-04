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
        $abc=1;
        while($abc <= 9 ){
        echo "abc ";
        $abc ++;//increment by 1
        }
        ?>
    <br/>
2 do-while loop:
        <?php
        //do-while loop
        //puts the condition check last it will continue to go until $xyz <= 9
        $xyz=1;
        do{
        echo "xyz ";
        $xyz ++;
        } while($xyz <=9);
        ?>
    <br/>
3 for loop:
        <?php
        //for loop initialize, test, runs during each loop separated by 3 semicolons.
            for($num=1;$num<=9;$num++){
                echo $num . " ";
            }
        ?>
    <br/>
4 for loop:
        <?php
        echo '<br>';
        $alphabet = "A";
        for($i=1;$i<=6;$i++){//going though 0 through 5 loops 5 times
            echo $i . ".";//list of 1 through 6  concatenating a .
            echo "Item ".$alphabet++;
            echo '<br>';//this creates a line break every time it is looped through.
         
        }
        ?>
        <br/>

PART 2:<br/>
5 for loop finding square: 
    <sup>
        <?php
        echo '<br>';//line break
        $squares= array(1,2,3,4,5,6,7,8,9,10,11,12);//assigning 1-2 to $ squares to be called later in the for loop
        for($i=0;$i<=11;$i++){//starts at 0 loops through less than or equal to 11 times.
        echo pow(2,$squares[$i]); //echo the square of $squares 1**2
        echo'<br>';//line break
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
    $months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");//assigning the months of the years to months
    $daysinmonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);//this array is listing how many days are in each month
    echo "<table border =\"2\" style='border-collapse: collapse'>";// this is giving the border
        echo "<th colspan=12>Days in a month</th>";//this is heading 
        $that="";//declaring variable to be added to on line 91
        $that2="";//declaring variable to be added to on line 92
        foreach($months as $month =>$currentmonth){//iterating over the items in the loop of $months renamed as $month and $values are accessed using $currentmonth
            
            $that .= "<td>$currentmonth</td>"."\n"; //.=concatenating the nex array item//$currentmonth is pulling the month from the array months
            $that2 .= "<td>$daysinmonth[$month]</td>";//.=concatenating the nex array item//getting the number of days in each month from $daysinmonth
            
        }
        echo "<tr>";//table row
        echo $that;//getting the result from within the foreach loop and sending it the the browser
        echo "</tr>";//end table row
        echo "<tr>";//table row
        echo $that2;//getting the result from within the foreach loop and sending it the the browser
        echo "</tr>";//end table row
    echo "</table>";//end table
    ?> 
    
</body>
</html>