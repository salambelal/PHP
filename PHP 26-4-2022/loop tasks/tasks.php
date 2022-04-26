<?php

//task one
$sum= 0;

 for($num=0; $num <=30; $num++){
$sum +=$num;
    }
    echo $sum."<br>";






//task two 
for($s=1; $s<=5; $s++){
    for($l=1;$l<=5; $l++){
        if($s==$l){
            echo $s . " ";
        }
        else 
        echo 0 . " ";
    }
    echo '<br>';
}

//task three

function factorial($num){
    $facto =1;
    for($i =2; $i<=$num; $i++){
        $facto = $facto * $i;
    }
    return $facto;
}

echo factorial(5);

//task four

$a=0;
$b=1;
$c=0;
$counter=1;
echo $a . " " . $b . " ";
while($counter<=10) {
    $c=$a+$b;
    echo $c . " ";
    $a=$b;
    $b=$c;
    $counter++;
}

//task five

$n=1;
for($i=1; $i<=5; $i++) {
    for($j=1; $j<=$i; $j++){
        echo $n++ . " ";
    }
    echo '<br>';
}
?>

