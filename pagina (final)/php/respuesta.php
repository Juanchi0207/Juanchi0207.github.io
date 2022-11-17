<?php
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['Email'];
$usuario = $_POST['Usuario'];
$contraseña = $_POST['Contraseña'];
$contraseña1= $_POST['Contraseña1'];

$servername = "127.0.0.1";
$database = "mydb";
$username = "alumno";
$password = "alumnoipm";
            
$conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
        
        
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}
else{
    $resultado = mysqli_query($conexion,"select email from usuario where email='$email'");
    $fila=mysqli_fetch_assoc($resultado);
    if($fila==NULL){
        $registrar = mysqli_query($conexion,"insert into usuario values('$email','$usuario','$apellido','$nombre','$contraseña',NULL)");
        echo ("Exitoso");
    }
    else{
        echo ("el usuario ya existe");
    }
}
?>
