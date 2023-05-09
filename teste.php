<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de enviar dados para o PHP usando JavaScript</title>
</head>
<body>
	<form>
		<label for="nome">Digite seu nome:</label>
		<input type="text" id="nome" name="nome">
		<button type="button" onclick="enviarDados()">Enviar</button>
	</form>

	<script>
		function enviarDados() {
			// Obtém o valor do input
			var nome = document.getElementById("nome").value;

			// Cria uma requisição AJAX
			var xhr = new XMLHttpRequest();

			// Define a URL do arquivo PHP que receberá os dados
			var url = "processar_dados.php";

			// Define o método de envio e a URL da requisição AJAX
			xhr.open("POST", url, true);

			// Define o cabeçalho da requisição
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			// Define o callback da requisição
			xhr.onreadystatechange = function() {
				if (xhr.readyState === 4 && xhr.status === 200) {
					// Exibe a resposta do servidor
					alert(xhr.responseText);
				}
			};

			// Envia a requisição AJAX com os dados do input
			xhr.send("nome=" + nome);
		}
	</script>
</body>
</html>
