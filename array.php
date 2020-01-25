<?php
/*$myArray =[
['First_name'=>"Abror",'Last_name'=>'Orinov'],
['First_name'=>'Islom','Last_name'=>'Saidabdullayev']
];
// for($int=0; $int<2; $int++)
// {
//     echo $int;    
// }
foreach($myArray as $array){
    echo $array['First_name']."   Faliliyasi: ".$array['Last_name'];
    echo'<br>';
}
*/
// O'zgaruvchilar
$myint = 2.23;
echo $myint.'<br>';
$mydouble = 2.23;
echo $mydouble.'<br>';
$mystring = 'Abror';
echo $mystring.'<br>';
echo '<br>';
// if operatori
if($myint < $mydouble){
    echo $string = 'Butun son kichik ekan';
}
else if($myint == $mydouble){
    echo ' Teng ';
}
else{
    echo 'butun son katta';
}
// massiv
echo'<br>';
$massiv = [1,4,9,2];

for($a = 0; $a < 3;$a++){
    echo $massiv[$a]." ";
}
echo '<br>';
$massiv1 = [
['1'=>'Abror','2'=>'Orinov','3'=>'943-18'],
['1'=>'Abror','2'=>'Orinov','3'=>'943-18'],
['1'=>'Abror','2'=>'Orinov','3'=>'943-18'],
['1'=>'Abror','2'=>'Orinov','3'=>'943-18'],
['1'=>'Abror','2'=>'Orinov','3'=>'943-18'],
['1'=>'Abror','2'=>'Orinov','3'=>'943-18']
];
foreach($massiv1 as $ab){
    echo $ab['1']."  ".$ab['2']."  ".$ab['3'].'<br>';
}
// while sikli 
$a1 = 1;
while($a1 <= 10){
    echo $a1." ";
    $a1++;
}
echo '<br>';
// massiv va funksiya
$aaa = [1,2,3,55,12,66]; 
sort($aaa);
var_dump($aaa);

