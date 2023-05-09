<button id="meuBotao">Clique aqui</button>
<?php include("buscarfotobanco.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php include_once("buscarfotobanco.php"); ?>
<script>
  $(document).ready(function() {
    $("#meuBotao").click(function() {
      
      var nome = "<?php minhaFuncao('teste'); ?>";
          alert(nome);

        
      });
    });
 
</script>
