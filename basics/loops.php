<?php
$contador = 1;

echo ">>>> WHILE <<<<" . PHP_EOL;
while ($contador <= 5) {
        echo "#$contador" . PHP_EOL;
        $contador ++;
}
 
echo PHP_EOL . ">>>> FOR <<<<" . PHP_EOL;
for($i=0; $i<15; $i++){
    if($i%2==0){
        continue;
    }else if($i==7){
        break;
    }    
    else{
        echo "# $i" . PHP_EOL;
    }   
}
?>