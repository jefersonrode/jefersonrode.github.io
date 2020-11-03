<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<?php
$valor = $_GET["v"]; // v É O VALOR VINDO DA PAGINA HTML
$rq = sqrt($valor);
echo "A RAIZ QUADRADA DE $valor É " . number_format($rq, 2); //FORMATA O NUMERO COM 2 CASAS DECIMAIS
?>
<br><br>
<hr>
<?php
$a = 25;
$b = 15;
$r1 = $a + $b;

if ($a < $b) {
    echo "A MENOR QUE B";
} else {
    echo "A MAIOR QUE B <br>";
}

echo date("Y") //apenas mostra o ano
?>
<hr>

<?php

$cdd = isset($_GET["cid"]) ? $_GET["cid"] : 0; //GET sempre em maiusculo
switch ($cdd) {
    case 1:
        echo "Vale";
        break;
    case 2:
        echo "Medio Vale";
        break;
    case 3:
        echo "Alto Vale";
}

?>

<hr>



<hr>
<a href="html-01.html">Voltar</a>

</body>

</html>