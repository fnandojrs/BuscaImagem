<?php
function minhaFuncao($arg) {
  return "Essa é minha função PHP com o argumento: " . $arg;
}
$arg = $_GET['argumento'];
echo minhaFuncao($arg);
?>
