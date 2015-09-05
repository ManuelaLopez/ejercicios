<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ejercicio 4</title>
    </head>
       <body style="background:#DDEEFF">
           <form id="form1" name="form1" method="post" action="">
               <center></center>
           
        <h3> ejercicio numero cuatro algoritmos. </h3>
        
         <label><h2>Ingrese el numero</h2></label>
        <input type="text" name="numero" id="numero" />
        
      
     
        <h1>   <input type="submit" name="enviar" id="enviar" value="Enviar" />
        <h1> <label for="resultado"></label></h1>
        
     <?php
       //A04: Pedir un número entre 0 y 9.999 y mostrarlo con las cifras al revés
   if (!empty($_POST["numero"])) {
         $numero = "";
	 $numero = $_POST["numero"];
         $numerostring=(string)$numero;
         $result="";
         for ($i = strlen($numero); $i >=0; $i--) {
             $result .= $numerostring[$i];
         }
           echo"<h1><center> El valor al reves es:</h1><h2><center>$result</center></h2></center><br/>";
                  
    
         }



?>
</body>
</html>
?>
