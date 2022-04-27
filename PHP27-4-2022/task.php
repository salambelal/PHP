
<?php
//task one

function IsPrime($num)
{
 for($x=2; $x<$num; $x++)
   {
      if($num %$x ==0)
	      {
		   return 0;
           
		  }
    }
  return 1;
   }

$a = IsPrime(8);
if ($a==0)
echo 'This is not a Prime Number'."<br>";
else
echo 'This is a Prime Number'."<br>";


//task two 

$s= "remove";

echo(strrev($s))."<br>";

// task three

$st= "remove";

if(ctype_lower($st))
   echo "Your String is Ok "."<br>";
   else
   echo "no";
   
//task four 
function swap($a,$b)
{
$n=$a;
$a=$b;
$b=$n;
echo "a=".$a."</br>";
echo "b=".$b."</br>";

}
swap(12,10);

//task five 
function armstrongNum($num) {
    $str = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $str; $i++) {
      $sum = $sum + pow((string)$num{$i},$str);
    }
    if ((string)$sum == (string)$num) {
      return "is Armstrong"."<br>";
    } else {
      return "Not";
    }
  }
  echo armstrongNum(407);


  //task six

  
function palindrome($str)
{
    if($str==strrev($str))
      echo "Yes it is a palindrome ";
    else
      echo " is not palindrome"."<br>";
}
palindrome("Eva, can I see bees in a cave");

//task seven

$array1 = array(2, 4, 7, 4, 8, 4);
$new=array_unique($array1);
foreach($new as $value)
  {
      echo $value. " ";
  }
?>
