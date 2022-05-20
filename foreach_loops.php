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

//associative array
/*foreach($array as $key => $value){
    statement;
}*/
?>
<?php
$ages = array(4,8,15,16,23,42);

foreach($ages as $age){//ages get re assigned as $age
    echo "Age:{$age}<br/>";
}
?>
<br/>
<?php
//for each using assoc. array // keys=>values
$person = array ("first name"=>"kevin","last name"=>"Skoglund","address"=>"123 Main Street","city"=>"Beverly Hills","state"=>"CA","zip_code"=>"90210");//assoc.array
foreach($person as $attribute => $data){//$person to $attribute
    $attr_nice = ucwords(str_replace("_"," ",$attribute));//accessing $ attribute and assigning it to $attr_nice with a string replace and uppercase words
    echo "{$attr_nice}: {$data}<br/>";//pulling the define $attr_nice from the line above and echoing to the browser $data is pulling from the values
}
?>
<br/>
<?php
$prices = array ("Brand New Computer" => 200, "1 month of Lynda.com"=> 25,"Learning PHP"=>null);


foreach($prices as $item => $price){//set prices as item then $price to values
    echo "{$item}: ";//sends items to the browser
    if(is_int($price)){//checks if there is a cost associated to the item if not it lists it as priceless.
        echo "$" .$price;
    }else{
        echo "priceless";
    }
    echo "<br/>";
}
?>
  </body>
</html>
