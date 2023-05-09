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
    <input type="text" name="myInput" id="myInput" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" autofocus>
    <button id="myBtn" onclick=enviarDados()>Busca</button>
    

    
  </div>
  <!-- <div id="dados" ></div> -->
  <img id="dados" src="" alt="">
  <img src="" alt="Imagem" title="Imagem" id="img" width="300" height="300" />
  <div id="resultado">///</div>
  <?php include_once("buscarfotobanco.php"); ?>
  
  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).on('keydown', function(event) {

if(event.keyCode === 13) {

    // Sua função aqui
    enviarDados();
    
    

}

});

</script>



    <!-- <script>
      
          
      var input = document.getElementById("myInput");
      
      input.addEventListener("keypress", function(event) {
      document.cookie = "CODPROD=''";
      if (event.key == "Enter") {
        var input2 = document.getElementById("myInput").value;
        
        

        
            
     


        var nome  = "";
        
        var imagem = document.getElementById("img");
			  imagem.src = nome;

        
        
        alert(nome);
        location.reload()
        // var imagem = document.getElementById("img");
      // imagem.src = nome;

      
      
      // alert(nome);
      // location.reload()
        
             
            
        
              }
              
    });
                 
    </script> -->

    <script>
		function enviarDados() {
			// Obtém o valor do input
			var nome = document.getElementById("myInput").value;

			// Cria uma requisição AJAX
			var xhr = new XMLHttpRequest();

			// Define a URL do arquivo PHP que receberá os dados
			var url = "buscarfotobanco.php";

			// Define o método de envio e a URL da requisição AJAX
			xhr.open("POST", url, true);

			// Define o cabeçalho da requisição
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			// Define o callback da requisição
			xhr.onreadystatechange = function() {
				if (xhr.readyState === 4 && xhr.status === 200) {
					// Exibe a resposta do servidor
					
          
          var imagem = document.getElementById("img");
          imagem.src = xhr.responseText;
          document.getElementById('myInput').value='';
				}
			};

			// Envia a requisição AJAX com os dados do input
			xhr.send("nome=" + nome);
		}
	</script>
    
    






</body>












</html>