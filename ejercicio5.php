<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ejercicio5</title>
    </head>
       <body style="background:#CCEAFF">
        <h3> ejercicio numero cinco algoritmos. </h3>

<form id="form1" name="form1" method="post" action="">
    <label><font color="red"><h2>Ingrese el numero :</h2></label></font>
        <label for="numeros"></label>
        <input type="text" name="numeros" id="numeros" />
      
      <p>
        <input type="submit" name="calcular" id="calcular" value="calcular" />
        
      </p>
      
          <?php
	
             if (!empty($_POST["numeros"])) {
	  $primernum = $_POST ["numeros"];
	  $segundonum = strrev ($primernum);
                if ($primernum == $segundonum) {
	  echo "<h6>el numero</h6> $primernum <h6>si es capicuo</h6>";
	  } else {
             echo "<h6>el numero </h6>$primernum <h6>no es capicuo</h6></br>";	 
	 }
 }
	?>
      </body>
</html>