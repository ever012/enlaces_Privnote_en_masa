<?php
//$nombre = $_POST["nombre"];   //solo dejar esto da un error porque estaba esperando recibir ese dato

//compruebo si se han enviado los datos
if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    echo "<p>{$nombre}, tu promedio es: {$promedio}</p>";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo</title>
</head>
<body>
<?php 
//$_SERVER['PHP_SELF']    hago referencia al actual archivo del actual directorio
//htmlspecialchars()     se usa como seguridad para evitar hackeos


?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <h1>promedios</h1>
    <label for="">nombre</label>
    <input type="text" name="nombre" id=""><br/>
    <label for="">Nota 1:</label>
    <input type="text" name="nota1" id=""><br/>
    <label for="">Nota 2:</label>
    <input type="text" name="nota2" id=""><br/>
    <label for="">Nota 3:</label>
    <input type="text" name="nota3" id=""><br/>
    <input type="submit" value="Calcular" name="submit">
    </form>
</body>
</html>
