<?php 
if (!empty($_POST["validar"])){
    $nome = $_POST["nome"];
  
    echo "o nome é: {$_POST["nome"]}";
  }

?>



<form method="$_POST">
<label for="imputname">Nome:</label>
<input type="text" id="imputname" name="nome">
<br>
<input type="submit" name="Validar">
</form>