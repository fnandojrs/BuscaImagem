
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Obtém o valor do input enviado pelo JavaScript
	$nome = $_POST["nome"];

	// Exibe o valor do input
	


    
include("conexao.php");   
$sql = 'SELECT pimg.foto ftbanco FROM produto P1 left join prodimg pimg on (p1.codprod = pimg.codprod) where p1.codprod = '.$nome;
$result = ibase_query($firebird, $sql);

$registro = ibase_fetch_assoc($result, IBASE_TEXT);
$conteudo_blob = $registro["FTBANCO"];
$img_blob = imagecreatefromstring($conteudo_blob);


$caminho_pasta_temp = dirname(__FILE__) . '/imagem';
$tempfile = tempnam($caminho_pasta_temp, 'img');

$nome_arquivo = 'imagem/'.basename($tempfile);

imagejpeg($img_blob, $tempfile);
$src = $tempfile;
// echo "<img src= '".$nome_arquivo."' alt='Minha imagem width='30%' height='30%'>";
// echo json_encode($nome_arquivo); 

// file_put_contents($tempfile, ibase_blob_get($result, 0));

// // Fecha a conexão com o banco de dados e libera a memória
ibase_free_result($result);
ibase_close($firebird);
echo $nome_arquivo; 

// // Define o tipo de conteúdo da resposta como imagem JPEG
// header('Content-Type: image/jpeg');

// Lê o arquivo temporário e envia para o navegador

//readfile($tempfile);

// Exclui o arquivo temporário
}






?>
