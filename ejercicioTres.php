<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ejercicio 3</title>
    </head>
       <body style="background:#CAAEFF">
       
<form id="form1" name="form1" method="post" action="">
    <center>
    <h1> BIENVENIDOS! </h1>
      <p>
          <label><font color="red">Por favor ingrese el valor del radio</font></label>  
        <input type="text" name="radio" id="radio" />
        <label for="opcion"><br/><br/>
         
          <font color="red"> seleccione una opción:</font> </label>
        <select name="opcion" id="opcion">
          <option value="1">circulo</option>
          <option value="2">circunferencia</option>
          
        </select>
      </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar"/>
        
        
      </p>
      <p>
        <label for="resultado">
        </body>  
<?php
  //A03: Por medio de un menú dar al usuario la opción de seleccionar círculo o circunferencia
// si selecciona círculo calcular su área. A=PI*r^2, si selecciona circunferencia calcular su longitud
        if (!empty($_POST["opcion"])) {
	 $radio = $_POST["radio"];
         $Pi = 3.1416;
         $area = $Pi * $radio *  $radio;
         $long = 2 * $Pi * $radio; 
	 $opc = $_POST["opcion"];
         
	 if ($opc == 1){
		echo"<h3><align>El área del circulo es de :</h3><h2><align> $area</align></h2></align><br/>";
     }else {
	 	echo"<h3><align> La longitud de la circunferencia es de:</h3><h2><align> $long</align></h2></align><br/>";	 
	 }
        }
  ?>
</html>