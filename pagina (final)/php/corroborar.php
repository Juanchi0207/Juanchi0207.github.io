<?php
$usuario = $_POST['Usuario'];
$contraseña = $_POST['Contraseña'];

$servername = "127.0.0.1";
$database = "mydb";
$username = "alumno";
$password = "alumnoipm";
            
$conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
       
        
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}
else{
    $resultado = mysqli_query($conexion,"select nombreUsuario,contraseña from usuario where nombreUsuario='$usuario' and contraseña='$contraseña'");
    $fila=mysqli_fetch_assoc($resultado);
    if($fila==NULL){
        echo ("el usuario no existe. Email o contraseña incorrectos");
    }
    else{
        session_start();
        $_SESSION["usuario"]=$usuario;
        echo ("Exitoso");
    }
}
?>