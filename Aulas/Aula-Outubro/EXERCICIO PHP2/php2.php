<!DOCTYPE html>
<html>
<body>




<?php

for ($row = 0; $row < 10; $row++) {
  echo "<br> Linha - $row > ";
  for ($col = 0; $col < 4; $col++) {
    $input = range(0, 100);
    $rand_keys = array_rand($input, 2);
    echo " Coluna $col - Valor =  " . $input[$rand_keys[0]]; " _ ";
  }
}
?>



</body>
</html>