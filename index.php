<?php
require_once('Privnote.php');    
$obj = new Privnote();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIVNOTE</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Convertir filas en enlaces PrivNote</h1>
    <form action="#" method="post">
        <label for="valores" id="valoresL">texto a convertir</label>
        <label  for="DatosSalida" id="DatosSalidaL">Enlaces Privnote</label> <br>

        <textarea id="valores" name="valores" rows="3" placeholder="Por ejemplo: 
        ridgegroove@gmail.com:Ltamzns7! | |TG @lordsuke - Plan = [Disney Plus Monthly - SE - Web - 2021, DISNEY_PLUS] | subType = INITIAL | Renewal Date = 11/22/2021 6:27:55 PM | isActive = True" 
        ></textarea>
        <textarea id="DatosSalida" rows="3" placeholder="NO NECESITAS ESCRIBIR NADA AQUI...
        Automaticamente aparecerá un texto como este: 
        cuenta#: https://privnote.com/RQJ1pkUU#SBNdTq1Kj"
        ></textarea>

        <p><input type="reset" class="btn btn-danger" value="Restablecer" name="B2">

        <input type="submit" class="btn btn-success" value="Convertir" name="submit" ></p>
    </form>

<script>
    const textSalida = document.getElementById("DatosSalida");

    function salida(link){
        textSalida.value += (link+"\n");
    }

</script>

<?php
//compruebo si se han enviado los datos
if(isset($_POST["submit"]))
{
    if(!empty($_POST["valores"]))
    {  
        $valor = $_POST["valores"];        // Recibimos valores de textarea  
        $valore = chop($valor);    // Elimina saltos de linea y espacio, pero solo al final de la cadena
        $valores = nl2br($valore);         // Agregamos los saltos de linea <br />
        $array_datos_ingreso = explode("<br />", $valores);    // Creamos array con los datos recibidos

        //$saliendo = implode("<br />", $array_datos_ingreso);    //mostrar arreglo de datos de entrada
        
        $longitud = count($array_datos_ingreso); //obtengo la cantidad de elementos
        
        //Recorro todos los elementos
        $j = 0;
        $link_Privnote = "";
        $array_datos_salida = array('');

        for($i=0; $i<$longitud; $i++)
        {
            //saco cada fila y la convierto en un enlace privnote
            $j += 1;
            $link_Privnote = "cuenta{$j}: ". $obj->note($array_datos_ingreso[$i]);
            echo "<script>salida('{$link_Privnote}');</script>";
        }
    }
    else 
    {
    echo '<h1 id="peligro">Asegúrese de llenar el cuadro de texto "Texto a convertir"</h1>';
    }
}

?>
<input type="hidden" name="papaparapa13@outlook.es">
<input type="hidden" name="Qazwsxedc123987">

</body>
</html>
