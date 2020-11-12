<?php
session_start();

if (!empty($_POST["num"])){
$num = @$_POST['num'][0];
}
//-------------------------
if ((@$_POST['num'][0] == "+") or
(@$_POST['num'][0] == "-") or
(@$_POST['num'][0] == "*") or
(@$_POST['num'][0] == "/")){
   $_SESSION["ss"] = $_SESSION["ss"] + 1 ;
}
if ($_SESSION['ss'] <= 1){
   $_SESSION["v1"] =$_SESSION["v1"].@$_POST['num'][0];
}else{
   $resultado1 = $_SESSION["v1"];
   eval('$result = '.$resultado1.';');
   $_SESSION["v1"] = $result.@$_POST['num'][0];
   $_SESSION['ss'] = 1;
}
//----------------------------
if (isset($_POST["calcular"])) {
   $resultado = $_SESSION["v1"];
   eval('$result = '.$resultado.';');
   $_SESSION["v1"] = $result;
   $_SESSION['ss'] = 0;
}
if (isset($_POST["reset"])) {
 session_destroy();
 $_SESSION = array();
}
?>


<!doctype html>
 <html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoDesign</title>
    <style type="text/css">
      td {
      color: #FFFF00;
      font-weight: bold;
      text-align: center;
      border: 1px solid #000099;
      }
      input#calc {
      background-color: #759475;
      text-align: right;
      color: #222722;
      border-color: #000099;
      }
      table#calculadora {
      border: 1px solid  #000099;
      background-color: #3300cc;
      }
      #titulo {
      font-family: arial, verdana, sans serif;
      font-size: 1em;
      font-weight: bold;
      text-align: center;
      }
      body{background-color: #f9f9f9; padding: 35px;} 
   </style>
  </head>
<body>
<label>Calculadora PHP</label>
<form method="POST">
   <table id="calculadora">
      <tr>
         <td colspan="4">
            <input id="v1" type="text" name="v1" value="<?=$_SESSION["v1"]?>" /><br>
         </td>
      </tr>
      <tr>
         <td>
            <input type="submit" name="num[]" value="7" />
         </td>
         <td>
            <input type="submit" name="num[]" value="8" />
         </td>
         <td>
         <input type="submit" name="num[]" value="9" />
         </td>
         <td>
            <input type="submit" name="num[]" value="/" />
         </td>
      </tr>
         <tr>
         <td>
            <input type="submit" name="num[]" value="4" />
         </td>
      <td>
            <input type="submit" name="num[]" value="5" />
      </td>
      <td>
            <input type="submit" name="num[]" value="6" />
      </td>
      <td>
            <input type="submit" name="num[]" value="*" />
      </td>
      </tr>
      <tr>
         <td>
            <input type="submit" name="num[]" value="1" />
         </td>
         <td>
            <input type="submit" name="num[]" value="2" />
         </td>
         <td>
            <input type="submit" name="num[]" value="3" />
         </td>
         <td>
            <input type="submit" name="num[]" value="-" />
         </td>
      </tr>
      <tr>
         <td>
            <input type="submit" id="reset" name="reset" value="C">
         </td>
         <td>
            <input type="submit" name="num[]" value="0" />
         </td>
         <td>
            <input type="submit" name="calcular" value="=" />
         </td>
         <td>
            <input type="submit" name="num[]" value="+" />
         </td>
      </tr>
   </table>
</form>
</body>
</html>
