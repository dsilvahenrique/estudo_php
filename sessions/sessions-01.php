<?php
echo "SESSIONS funcionam com se fossem super-globais <br> Enquanto o usuário estiver no seu site ele vai enxergar essas sessions em qualquer página do site <br> Por padrão a utilização de SESSIONS vem desabilitada <br>";

//session_start(); // Habilitar o uso de sessions

require_once("config.php");//importando de outro arquivo

$_SESSION["nome"] = "Hcode";

//ver nota da aula 29 pois desse jeito gera um erro
//session_unset($_SESSION['nome']); //excluir uma sessions

echo $_SESSION['nome'];

//session_destroy(); // destrói uma sessions e expulsa o usuario de volta para a tela de login

echo "<br>";
echo "<br>";
echo "###############SESSIONS ID #################";

echo "<br>";
echo session_id();
session_regenerate_id(); //gera um novo sessions ID
echo "<br>";
echo session_id();

echo "<br>";
echo "<br>";
echo "Estudar depois Funções para sessions";



?>