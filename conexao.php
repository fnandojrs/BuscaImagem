<?php

//ibase_connect  Abre uma conexão com um banco de dados InterBase
//pode ser colocado o IP, ou nome do computador onde esta o banco de dados

// $servidor = '127.0.0.1:D:/DESKTOP/ross-itauna/RESULTH.FB';

// //conexão com o banco, se der erro mostrara uma mensagem.
// $dbh=ibase_connect($servidor, ‘SYSDBA’, ‘masterkey’);


$ip_banco = "26.17.223.25:\Reswincs\banco-g\RESULTH.FB";
// $caminho_banco = "D:\\DESKTOP\\ross-itauna\\RESULTH.FB";
$usuario_banco = "SYSDBA";
$senha_banco = "masterkey";

$firebird = ibase_connect($ip_banco,$usuario_banco,$senha_banco) or die('Banco de dados indisponível. Entre em contato com o suporte para verificar.');


?>