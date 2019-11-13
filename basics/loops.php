<?php
$contador = 1;

echo ">>>> WHILE <<<<" . PHP_EOL;
while ($contador <= 5) {
    echo "$contador - " ;
    $contador ++;
}


echo PHP_EOL . ">>>> DO WHILE <<<<" . PHP_EOL;
$i = 0;
do {
    echo "$i - ";
    $i++;
} while ($i < 5);

 
echo PHP_EOL . ">>>> FOR <<<<" . PHP_EOL;
for($i=0; $i<15; $i++){
    if($i == 1 || $i == 4){
        continue;
    }else if($i==7){
        break;
    }    
    else{
        echo "$i - ";
    }   
}


echo PHP_EOL;
for ($i= 100; $i >= 0; $i -= 5) {
    echo "$i - ";
}

echo PHP_EOL;
?>


<!-- criando uma tabela usando loop 'for' -->
<table id="grid">
<?php
	for( $linha=0; $linha<10; $linha++ )
	{
		echo '<tr>';
		for( $coluna=0; $coluna<4; $coluna++ )
		{
			echo " <td>$linha-$coluna</td> ";
		}
		echo '</tr>' . PHP_EOL;
	}
?>
</table>