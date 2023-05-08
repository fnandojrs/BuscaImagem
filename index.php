<html>
<head>
<title>
    Busca Imagem
</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="favicom.png">
<script type="text/javascript" src="jquery.js"></script>

<style>
      img {
        margin-top: 2%;
        margin-left: 10%;
        
      }
    </style>


</head>

<body>

    <div id="escolha">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Busca por Referencia
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
     Busca por Codigo
  </label>
</div>
</div>
<div class="input-group input-group-lg">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-lg">Digite Codigo</span>
    </div>
    <input type="text" name="myInput" id="myInput" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
    <button id="myBtn" >Busca</button>
    

    
  </div>
  <!-- <div id="dados" ></div> -->
  <img id="dados" src="" alt="">
  <img src="" alt="Imagem" title="Imagem" id="img" width="300" height="300" />
  <div id="resultado">///</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      var input = document.getElementById("myInput");
      var input2 = document.getElementById("myInput").value;
      input.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn").click();
              }
    });



        $(document).ready(function() {
            $("#myBtn").click(function() {
                $.ajax({                  
                    url: "buscarfotobanco.php",
                    type: "GET",                    
                    dataType: 'json',
                    success: function(data) {
                        // $("#dados").html(data);
                        document.getElementById("img").src = data;
                                            },
                    error: function() {
                        $("#dados").html("Erro ao obter dados.");
                    }
                });
            });
        });
      
    </script>














<?php

    function minhaFuncaoPHP() {
    // código da função
      $resultado123 = 'OLA !!!!';
      print $resultado123;
      
     }
   
?>


<?php

function foto() {
include("conexao.php");
$sql = 'SELECT pimg.foto ftbanco FROM produto P1 left join prodimg pimg on (p1.codprod = pimg.codprod) where p1.codprod = 8724';
$result = ibase_query($firebird, $sql);

$registro = ibase_fetch_assoc($result, IBASE_TEXT);
$conteudo_blob = $registro["FTBANCO"];
$img_blob = imagecreatefromstring($conteudo_blob);


$caminho_pasta_temp = dirname(__FILE__) . '/imagem';
$tempfile = tempnam($caminho_pasta_temp, 'img');

$nome_arquivo = 'imagem/'.basename($tempfile);

imagejpeg($img_blob, $tempfile);
$src = $tempfile;
echo "<img src= '".$nome_arquivo."' alt='Minha imagem width='30%' height='30%'>";



// // Fecha a conexão com o banco de dados e libera a memória
ibase_free_result($result);
ibase_close($firebird);

// // Define o tipo de conteúdo da resposta como imagem JPEG
// header('Content-Type: image/jpeg');

// Lê o arquivo temporário e envia para o navegador

//readfile($tempfile);

// Exclui o arquivo temporário
}

?>


















</body>












</html>