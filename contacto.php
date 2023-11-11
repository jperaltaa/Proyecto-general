<?php 
include("conexion.php");

if(isset($_POST['enviar'])){
    if(strlen($_POST['nombre'])>=1 &&
    strlen($_POST['apellido'])>=1 &&
    strlen($_POST['ciudad'])>=1 &&
    strlen($_POST['departamento'])>=1 &&
    strlen($_POST['celular'])>=1){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ciudad = $_POST['ciudad'];
    $departamento = $_POST['departamento'];
    $celular = $_POST['celular'];
    $consulta = "INSERT INTO datos(Nombre, Apellido, Ciudad, Departamento, Celular) VALUES ('$nombre','$apellido','$ciudad','$departamento','$celular')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        ?>  
        <h3> En un momento nos contactaremos contigo </h3>      
        <?php
    } else {
        ?> <h3> Por favor complete los datos</h3><?php
    }
}
}

?>