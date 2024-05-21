
<?php

$marks = 89;

if($marks>=80){
    echo 'A+ <br>';
}
elseif($marks>=70){
    echo 'A <br>';
}
else{
    echo 'Fail <br>';
}

$color = 'Yellow';

switch($color){
    case 'Green';
    echo 'Success <br>';
    break;

    
    case 'Yellow';
    echo 'Warning <br>';
    break;

    case 'Blue';
    echo 'Info <br>';
    break;

    default:
    echo 'Failure <br>';
    break;
}

$marks = 71;

switch($marks){
    case 80;
    echo 'A+ <br>';
    break;

    
    case 70;
    echo 'A <br>';
    break;

    case 60;
    echo 'A- <br>';
    break;

    default:
    echo 'Failure <br>';
    break;
}


$array = [10, 54, 80, 60];

for($i=0; $i<=3; $i++){
    echo $array[$i] .' ';
}

foreach($array as $element){
    echo $element. ' ';
}

echo '<br>';

$i = 0;

while($i<=3){
    echo $array[$i] . '<br>';
    $i++;
}

$i = 0;

do{
    echo $array[$i] . '<br>';
    $i++;
}

while($i<=3);

?>