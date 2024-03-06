<?php session_start();

include "../classes/conexion.php";
include "../classes/crud.php";

$Crud = new Crud();

$id = $_POST['id'];
$data = array(
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "nombre" => $_POST['nombre'],
    "fecha_nacimiento" => $_POST['fecha_nacimiento'] 
);

$response = $Crud->update($id, $data);

if($response->getModifiedCount() > 0 || $response->getMatchedCount() > 0){
    $_SESSION['alert_crud'] = 'update';
    header("location:../index.php");
} else {
    print_r($response);
}


?>