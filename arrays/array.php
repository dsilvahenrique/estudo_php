<?php

$frutas = array("laranja", "abacaxi", "melancia");

print_r($frutas);  //PRINT DO ARRAY

echo "<br>";
echo "<br>";
echo "############### ARRAY BI-DIMENSIONAL #####################". "<br>";

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br>";

echo "Último elemento do array:"." ". end($carros[1]); // RETORNA O ÚLTIMO ELEMENTO DO ARRAY BI-DIMENSIONAL



$pessoas = array();

array_push($pessoas, array(

    'nome'=>'João',
    'idade'=>20

));

array_push($pessoas, array(

    'nome'=>'Glaucio',
    'idade'=>25

));




echo "<br>";
echo "<br>";
echo "############### PRINT ELEMENTOS DO ARRAY #####################". "<br>";
echo "Número de elementos do array"." ". count($pessoas)."<br>";
for ($i=0; $i < count($pessoas); $i++) { 
	print_r("Nome:" . " ".$pessoas[$i]['nome'] . " ". "Idade:"." ". $pessoas[$i]['idade']);
	echo "<br>";
}

//print_r($pessoas[0]);


?>