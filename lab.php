<?php

echo '<h1>Variable Declaration And Sum</h1>';


$num1='10';
$num2='20';

echo "1st Number &nbsp $num1";
echo  "<br> 2nd Number &nbsp $num2";

$result = $num1 + $num2;


echo " <br> Sum is &nbsp$result";

echo "<br> <h1> Condition  if else</h1><br> <br";

if ($num1>$num2)
{
    echo "1st number is larger";
}

else{
    echo " <h3>2nd number is larger";
}

echo "<br> <h1> For Loop </h1><br> <br>";
for($i=1;$i<=$num1;$i++)
{
    echo "The Number is .$i<br>";
    
}

echo "<br> <h1> While Loop </h1><br> <br>";
$i=5;
while($i <= $num1)
{
    echo "The Number is $i <br>";
    $i++;
}

echo "<br> <h1> Array with foreach lop </h1><br> <br>";

$name = array("Nahid ", "Tanzila", "Hasan");
  foreach ($name as $value)
  {
      echo "$value<br>";
  }


?>