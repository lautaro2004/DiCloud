<?php
//conexion a la base de datos y pagina
$mysqli = new mysqli("localhost"/*Cambiar a pagina de Digitize*/, "root", ""/*Colocar contraseña del root de la base de datos*/, "libros"/*Base de datos*/);

$salida = ""; 

//se encarga de mostrar todos los datos
$query = "SELECT * FROM libros ORDER by id"; 

//Se encarga de mostrar si la consulta existe 

if(isset($_POST['consulta'])){
        //Limpia todo caracter especial que puede a llegar a tener nuestra consulta
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT /*Aca tienen que estar las cosas que usan los libros 
        para identificarlos*/ FROM libros WHERE titulo LIKE '%".$q."%' OR autor LIKE '%".$q."'";
}

//envia la consulta a la base de datos 
$resultado = $mysqli->query($query); 

//verifica si se encuentra el resultado
if($resultado->num_rows > 0){
    $salida.= "Aca iria el coso que muestra los libros xd";

    //Se encargaria de mostrar los datos 
    while($fila = $resultado->fetch_assoc()){
        $salida.= "mostrar datos de la BBDD";
    }
} else {
    $salida.= "No hay datos"; 
}

//envia los datos al js 
echo $salida; 

//Se desconecta de la BBDD y de la pagina 

$mysqli->close(); 
?>