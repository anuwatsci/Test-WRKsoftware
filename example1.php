<!DOCTYPE html>
<html>
<body>
<?php 
//variable
$min = 1;
$max = 20; 
$size = 10;
$input = array(); 
//push array random
for($x=0;$x<=10;$x++){ 
  array_push($input,rand($min,$max));  
} 
?>
<!--start display-->
Input: [
<?php
$duplicate = array(); 
foreach($input as $key => $val){
    echo $val;
    if((count($input)-1)!=$key){
        echo ",";
    }
    $duplicate[$val] ++;  
} 
?>
] <br/>
<?php 
sort($input);
echo "Output: [ 
        <br/>‘sum’ => ". array_sum($input) .
        "<br/>‘sort’ => ‘";
foreach($input as $key => $val){
    echo $val;
    if((count($input)-1)!=$key){
        echo ",";
    } 
} 
    echo "’,";
    echo "<br/>‘duplicated’ => ‘";
 $strduplicat ="";
  foreach($duplicate as $key => $val){
   if($val>1){
      $strduplicat = $strduplicat.$key.",";
   } 
  } 
 echo substr($strduplicat, 0, -1)."’<br/>]";
?>
</body>
</html>
