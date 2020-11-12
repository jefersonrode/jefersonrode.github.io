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
    <title>Calculadora PHP</title>
    <style type="text/css">
      td {
         text-align: center;
         border: 1px solid red;
         height: 50px;
      }
      #bt {
         height: 40px;
         width: 40px;
         font-size: 20px;
         color: red;
         background-color: #1C1C1C;
         border-radius: 3px;
         border: 2px solid grey;
      }
      input#v1 {
         background-color: #759475;
         text-align: right;
         font-size: 20px;
         color: #222722;
         border-color: grey;
         height: 30px;
      }
      table#calculadora {
         border: 14px solid  black;
         border-radius: 8px;
         background-color: black;
      }
      #lab1 {
         color: grey;
         font-family: Arial, Helvetica, sans-serif;
      }
      body{
         background-color: #f9f9f9;
         padding: 35px;
         
      } 
   </style>
  </head>

<body>
<form method="POST" >
   <table id="calculadora" cellpadding="10" cellspacing="0" >
      <tr>
         <td colspan="4">
         <label id="lab1">CALCULADORA PHP</label>
         </td>
      </tr>
      <tr>
         <td colspan="4">
            <input id="v1" type="text" name="v1" value="<?=$_SESSION["v1"]?>" />
         </td>
      </tr>
      <tr>
         <td>
            <input id="bt" type="submit" name="num[]" value="7" />
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="8" />
         </td>
         <td>
         <input id="bt" type="submit" name="num[]" value="9" />
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="/" />
         </td>
      </tr>
         <tr>
         <td>
            <input id="bt" type="submit" name="num[]" value="4" />
         </td>
      <td>
            <input id="bt" type="submit" name="num[]" value="5" />
      </td>
      <td>
            <input id="bt" type="submit" name="num[]" value="6" />
      </td>
      <td>
            <input id="bt" type="submit" name="num[]" value="*" />
      </td>
      </tr>
      <tr>
         <td>
            <input id="bt" type="submit" name="num[]" value="1" />
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="2" />
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="3" />
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="-" />
         </td>
      </tr>
      <tr>
         <td>
            <input id="bt" type="submit" name="reset" value="C">
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="0" />
         </td>
         <td>
            <input id="bt" type="submit" name="calcular" value="=" />
         </td>
         <td>
            <input id="bt" type="submit" name="num[]" value="+" />
         </td>
      </tr>
   </table>
</form>
</body>
</html>
