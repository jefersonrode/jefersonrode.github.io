<!doctype html>
 <html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>RoDesign</title>
 
  </head>
<body>


<?php
    echo "Rôde <br>"
?>

<?php
$a = 5;
$b = 15;
$r1 = $a + $b;
    echo "a + b = r1 " . $r1;

    $r2 = $a - $b;
    echo "a - b = r2 <br>" . $r2;

    //if ($a > $b); echo "a menor";

$ter = $a < $b ? "maior" : "menor";
echo "<br>$ter";
?>


</body>
</html>