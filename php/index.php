<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>';
    define ("PI", 3.14);             $mensaje="soy un mensaje";
    $Mensaje="soy otro mensaje";

    $num1=8;
    echo "El valor de la variable al asignarle valor inicial es: " , $num1;
    echo "<br>";
    echo "El valor de la variable es: " , ++$num1;
    echo "<br>";
    echo "El valor de la variable es: " , $num1++;
    echo "<br>";
    echo "El valor de la variable es: " , --$num1;
    echo "<br>";
    echo "El valor de la variable es: " , $num1--;
    echo "<br>";

    echo $mensaje , " " , $Mensaje;
    
    ?> 

</html>