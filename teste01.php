<!DOCTYPE html>
<html>
<head>
    <title>Exemplo PHP-JavaScript</title>
</head>
<body>
    <h1>Exemplo PHP-JavaScript</h1>
    <button id="botao">Obter Dados</button>
    <div id="dados"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#botao").click(function() {
                $.ajax({
                    url: "obter_dados.php",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#dados").html("Nome: " + data.nome + "<br>Email: " + data.email);
                    },
                    error: function() {
                        $("#dados").html("Erro ao obter dados.");
                    }
                });
            });
        });
    </script>
</body>
</html>
