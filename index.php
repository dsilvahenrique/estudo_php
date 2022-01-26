<?php

// alt+shift+2 abre duas telas no sublime


//echo "Hello World!"; 
echo "<br/>"; //pula linha

// declarando variáveis
$nome = 'Pedro';
$sobreNome = "Henrique";
//echo $nome . "<br/>"; //pula linha

//concatenacao
$nomeCompleto = $nome . " ". $sobreNome;
echo "Meu nome é:"." ". "$nomeCompleto". "<br/>";

// destrói uma variável
//unset($nome); 

// Comando isset é uma boa prática, ele vrf se uma variavel foi definida ou não.
if (isset($nome)){
	echo $nome . "<br/>";
}
 
//array

$frutas = array("banana", "mamão", "tomate");
echo $frutas[0] . "<br/>";

var_dump($nomeCompleto); //imprime qual o tipo de dado
echo("<br/>");

// Converter tipo de variáveis
$idade = "30";
var_dump($idade);
$idade = (int)30;
var_dump($idade);
echo("<br/>");

//Arrays Super Globais ou Variáveis pré-definidas
// aula 15 >>> Não entendi muito bem o objetivo


// aula 16 - Escopo de variável
// function
// ATENÇÂO>>> Para que possamos utilizar uma variaável global dentro da função temos que utilizar o global + nome da variável. Pode-se criar dentro da função uma outra variável de mesmo nome de uma variável global, que se nãousarmos o global o programa irá utilizar a variável que está dentro da função. Quando usarmos Super globais, não é necessário utilizar o comando global.

function funcao1(){
	global $nomeCompleto;
	echo "Print da função1:" . " ". $nomeCompleto. "<br/>";

}

funcao1();


// OPERADORES
 $valor = 100;
 echo "O valor do produto é:"." ".$valor . "<br/>";
 $valor *= .9; // equivale a 90% do valor 
 echo "O valor do produto com 10% de desconto é:"." ".$valor . "<br/>";
 $valor += 20;
 echo "O valor do produto parcelado é:"." ".$valor . "<br/>";
 
 $numero1 = 6;
 $numero2 = 3;
 echo $numero1 * $numero2 . "<br>";
 echo $numero1 / $numero2 . "<br>"; // resultado da divisão
 echo $numero1 % $numero2 . "<br>"; // resto da divisão
 echo $numero1 ** $numero2 ."<br>"; // exponenciação primeiro parametro elevado ao segundo

var_dump($numero1 > $numero2);
echo "<br>";
var_dump($numero1 < $numero2);
echo "<br>";
var_dump($numero1 == $numero2); // compara o valor
echo "<br>";
var_dump($numero1 === $numero2); // compara o valor e o tipo
echo "<br>";
var_dump($numero1 != $numero2); // diferente que
echo "<br>";
var_dump($numero1 !== $numero2); //diferente com relação ao tipo e ao valor
echo "<br>";

//operador space ship
// diz o seguinte:  se o 1 parâmetro for maior que o segundo me retorna 1
// 					se o 2 parâmetro for maior que o 1 me retorna -1
//					se os valores forem iguais me retorna 0
var_dump($numero1 <=> $numero2); 
echo "<br>";

// Null Coalesce
// utilizados para variáveis com valor nulo
$nulo1 = NULL;
$nulo2 = NULL;
$numero3 = 20;
echo $nulo1 ?? $nulo2 ?? $numero3;
echo("<br>");
 // vai passando até chegar em um valor não null

//&& significa e     || significa ou
$numero4 = $numero1 < $numero2 && 10 > 1;
var_dump($numero4);
echo("<br>");

//Interpolação de variáveis
// aspas duplas vs aspas simples
// aspas duplas"" faz uma vrf antes no código para ver se tem alguma variável com esse nome. Se positivo,  se imprime o valor da var se Negativo se imprime o que estiver dentro das aspas duplas. LEMBRAR que se desejar imprimir o conteúdo dentro das aspas duplas dedve-se retirar o sinal $.
// aspas siomples '' imprime o que estiver literalmente escrito dentro das aspas simples.
echo "$numero3". "<br>";
echo '$numero3'. "<br>";


//Strings

$lemaMarinha = "Sempre restará muito o que fazer!";
$palavraBuscada = "muito";
$replace = "pouco";
echo strlen($lemaMarinha) . "<br>"; // retorna tamanho da string
$q = strpos($lemaMarinha, $palavraBuscada); //  retorna posição de uma palavra dentro da String
echo substr($lemaMarinha, $q + strlen($palavraBuscada)) . "<br>"; // retorna a parte da string depois da posição informada. sem a palavra buscada inclusa. Para incluir a palavra buscada no retorno basta retirar o que está depois do sinal de +
echo substr($lemaMarinha,0,$q + strlen($palavraBuscada)) . "<br>"; 

echo strtoupper($nomeCompleto) . "<br>"; // tudo maiúsculo
echo strtolower($nomeCompleto) . "<br>"; // tudo minúsculo
echo ucfirst($nomeCompleto) . "<br>"; // Primeiras letras de cada palavra maúscula
echo str_replace("e", "&", $nomeCompleto) . "<br>"; // troca de strings
echo str_replace("&", "e", $nomeCompleto) . "<br>"; // troca de strings
echo str_replace($palavraBuscada, $replace, $lemaMarinha) . "<br>";
echo str_replace($replace, $palavraBuscada, $lemaMarinha) . "<br>";

// INCLUDE E ENQUIRE - AULA 19
//O require exige que o arquivo exista e esteja funcionando. O include não faz essa exigência e usa o include_path para procurar por arquivos que não encontrar



// else -if

$qualASuaIdade = 15;
$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCriança) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}
echo "<br>";
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"; // operador ternário para vrf(s) diretas


//SWITCH
echo "<br>";
echo "<br>";
echo "############### SWITCH #####################". "<br>";

$diaDaSemana = date("w"); //retorna o dia da semana em numero

switch ($diaDaSemana) {

    case 0:
    echo "Domingo";
    break;

    case 1:
    echo "Segunda";
    break;

    case 2:
    echo "Terça";
    break;

    case 3:
    echo "Quarta";
    break;

    case 4:
    echo "Quinta";
    break;

    case 5:
    echo "Sexta";
    break;

    case 6:
    echo "Sábado";
    break;

    default: // para o caso de ter um caso que não esteja coberto por nenhum dos switchs acima
    echo "Data inválida";
    break;
}

// for  
echo "<br>";
echo "<br>";
echo "############### FOR #####################". "<br>";
for ($i = 0; $i < 1000; $i+= 5) {

    if ($i >= 200 && $i <= 800) continue;

    if ($i === 900) break;

    echo $i . "<br>";

}

echo "<br/>";
echo "<select>"; // estudar HTML

for ($i=date("Y"); $i > date("Y")-100 ; $i--) { // parte da data atual até 100 anos para trás

    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

echo "<br>";
echo "<br>";
echo "############### FOR EACH #####################". "<br>";

$listaCompras = array("banan", "jaca", "uva", "abacaxi");

foreach ($listaCompras as $lis) {
    echo $lis . "<br>"; 
}

echo "<br>";
echo "<br>";
echo "############### WHILE E DO-WHILE #####################". "<br>";

$total = 150;
$desconto = 0.9;

do {

    $total *= $desconto;
    echo $total . "<br>";

} while ($total > 100);


echo "<br>";
$condicao = true;

while ($condicao) {

    $numero = rand(1, 10);

    if ($numero === 3) {

        echo "TRÊS!!!!";
        $condicao = false;

    }
}


echo "<br>";
echo "<br>";
$valorProduto = 1000;
$valorDesconto = 5;

if ($valorProduto > 999) {
    echo $valorProduto - $valorProduto* (5/100);

// auhsuahsuahsuhas
}






?>