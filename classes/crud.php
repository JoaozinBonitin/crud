<?php


class Crud extends Conexion{
    public function mostrarDados(){
        try{

            $conexion = Conexion::conectar();
            $collection = $conexion->personas;
            $data = $collection->find();
            return $data;

        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }

    public function inserirDados($data){
        $conexion = Conexion::conectar();
        $collection = $conexion->personas;
        $response = $collection->insertOne($data);
        try {
            return $response;
            
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obterDados( $id){
        try {
            $conexion = Conexion::conectar();
            $collection = $conexion->personas;

            $data = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));

            return $data;

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function excluir($id){
        try {

            $conexion = Conexion::conectar();
            $collection = $conexion->personas;
            $response = $collection->deleteOne(array("_id" => new MongoDB\BSON\ObjectId($id)));
            return $response;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update($id, $data){
        try {
            $conexion = Conexion::conectar();
            $collection = $conexion->personas;
            $response = $collection->updateOne(['_id' => new MongoDB\BSON\ObjectId($id)], ['$set' => $data]);
            return $response;
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

    public function alertCrud($alert){
        $msg = '';

        if ($alert == 'insert') {
            $msg = 'swal("Perfeito!", "Inserido com  Sucesso!", "success")';
        } else if ($alert == 'update'){
            $msg = 'swal("Perfeito!", "Atualizado com  Sucesso!", "info")';
        } elseif ($alert == 'delete') {
            $msg = 'swal("Perfeito!", "Deletado com  Sucesso!", "warning")';
        }

        return $msg;
    }
}

?>