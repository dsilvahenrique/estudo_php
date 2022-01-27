<?php

echo " Constantes são criadas utilizando o comando ((define)) <br> Todos os caracteres por convenção devem ser MAIÚSCULOS <br> A grande novidade com o php-7 é que arrays podem ser constantes ";

define("DATA_NASCIMENTO", "1991");
echo "<BR>";
echo DATA_NASCIMENTO;


echo "<br>";
echo "<br>";
echo "############### ARRAY CONSTANTE############";
echo "<br>";

define("BANCO_DE_DADOS", [

    '127.0.0.1',
    'root',
    'password',
    'test'

]);

echo BANCO_DE_DADOS[1];
echo "<BR>";
print_r(BANCO_DE_DADOS);


?>