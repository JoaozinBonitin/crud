<?php session_start();
include "../classes/conexion.php";
include "../classes/crud.php";

$Crud = new Crud();

$data = array(
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "nombre" => $_POST['nombre'],
    "fecha_nacimiento" => $_POST['fecha_nacimiento'] 
);

$respose = $Crud->inserirDados($data);

if($respose->getInsertedId() > 0){
    $_SESSION['alert_crud'] = 'insert';
    header("location:../index.php");

}else{
    print_r($respose);
}
?>