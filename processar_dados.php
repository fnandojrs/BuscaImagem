<?php
// Verifica se o método da requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Obtém o valor do input enviado pelo JavaScript
	$nome = $_POST["nome"];

	// Exibe o valor do input
	echo $nome;
}
?>
