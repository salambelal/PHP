<?php
// task one
$colors = array('white', 'green', 'red'); 

sort($colors);

$clength = count($colors);
for($x = 0; $x < $clength; $x++) {
  echo $colors[$x];
  echo "<br>";
}

//task two 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

sort($cities);
  

foreach($cities as $key => $value){
 echo 'The capital of '.$key .' is '.$value. '</br>';
}


//task three 

$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

echo $color[4];

//task four
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

krsort($fruits);

foreach($fruits as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
}

//task five

$words =  array("abcd","abc","de","hjjj","g","wer");
$lengths = array_map('strlen', $words);

echo "The shortest array length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".";

?>
