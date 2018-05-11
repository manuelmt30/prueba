<?php
$conectar = mysqli_connect("localhost","root","", "prueba");
if(!$conectar){
    echo "No se puede conectar con el servidor";
}else{
   echo "Conectado a la base de datos";
}

$id = $_POST["id"];
$name = $_POST["nombre"];
$site = $_POST["sitio"];
$email = $_POST["email"];
$tel = $_POST["telefono"];
$street = $_POST["calle"];
$city = $_POST["ciudad"];
$state = $_POST["estado"];
$location = $_POST["ub"];
$rating = $_POST["ra"];

$consulta="INSERT INTO contacto (id,nombre,sitio,email,telefono,calle,ciudad,estado,ubicacion,raiting) VALUES ('$id','$name','$site','$email','$tel','$street','$city','$state','$location','$rating')";

$ejecutar =mysqli_query($conectar, $consulta);
if(!$ejecutar){
    echo"hubo algun error.";
}else{
    echo"datos resividos";
}

?>