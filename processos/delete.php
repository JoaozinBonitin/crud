<?php session_start();
include '../classes/conexion.php';
include '../classes/crud.php';

$crud = new Crud();
$id = $_POST['id'];

$response = $crud->excluir($id);

if($response->getDeletedCount() > 0){
    $_SESSION['alert_crud'] = 'delete';
    header("location:../index.php");
}else{
    print_r($response);
}

?>