<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loops assignment</title>
</head>
<body>
    while loop:
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
do-while loop:
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
for loop:
    <?php
    //for loop initialize, test, runs during each loop separated by 3 semicolons.
        for($num=0;$num<=9;$num++){
            echo $num . " ";
        }
        ?>
        <br/>
for loop:
    <?php
    $items =array(1=>"Item A",2=>"Item B",3=>"Item C",4=>"Item D",5=>"Item E",6=>"Item F",);
    for($items=0;$items<=6;$items++){
        echo $items . [];
    }
    
        
        
        ?>



    
</body>
</html>